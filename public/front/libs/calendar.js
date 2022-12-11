function calendar(id, year, month) {
    var eventsList = [];
    var monthsList = [
        "Yanvar",
        "Fevral",
        "Mart",
        "Aprel",
        "May",
        "Iyun",
        "Iyul",
        "Avgust",
        "Sentabr",
        "Oktabr",
        "Noyabr",
        "Dekabr"
    ];

    var Dlast = new Date(year, month + 1, 0).getDate(),
        D = new Date(year, month, Dlast),
        DNlast = new Date(D.getFullYear(), D.getMonth(), Dlast).getDay(),
        DNfirst = new Date(D.getFullYear(), D.getMonth(), 1).getDay(),
        calendar = '<tr>',
        month = monthsList;

    if (DNfirst != 0) {
        for (var i = 1; i < DNfirst; i++) calendar += '<td>';
    } else {
        for (var i = 0; i < 6; i++) calendar += '<td>';
    }



    fetch('/api/get-events')
        .then((response) => {
            return response.json();
        })
        .then((data) => {
            eventsList = data;
            for (var i = 1; i <= Dlast; i++) {
                var clalEvent = [];
                for (var j = 0; j < eventsList.length; j++) {
                    if (typeof (eventsList[j]) != 'undefined') {
                        var dat = new Date(eventsList[j].date);
                        if (D.getFullYear() == dat.getFullYear() && D.getMonth() == dat.getMonth() && i == dat.getDate()) {
                            clalEvent.push(eventsList[j]);
                        }
                    }
                }

                if (clalEvent.length > 0) {
                    calendar += '<td class="active" day="' + i + '">' + i;
                } else {
                    if (i == new Date().getDate() && D.getFullYear() == new Date().getFullYear() && D.getMonth() == new Date().getMonth()) {
                        calendar += '<td class="today">' + i;
                    } else {
                        calendar += '<td>' + i;
                    }
                }
                if (new Date(D.getFullYear(), D.getMonth(), i).getDay() == 0) {
                    calendar += '<tr>';
                }
            }
            for (var i = DNlast; i < 7; i++) calendar += '<td>&nbsp;</td>';
            $('#' + id + ' tbody').html(calendar);
            $('#' + id + ' thead td').eq(1).html(month[D.getMonth()] + ' ' + D.getFullYear());
            $('#' + id + '').attr('month', D.getMonth());
            $('#' + id + '').attr('year', D.getFullYear());

            if ($('#' + id + ' tbody tr').length < 5) {
                $('#' + id + ' tbody').append('<tr><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td><td>&nbsp</td></tr>');
            }
            $('#calendar td').click(function () {
                if ($(this).hasClass('active')) {
                    var day = $(this).attr('day');
                    var month = $('#calendar').attr('month');
                    var year = $('#calendar').attr('year');
                    var lng = $('#calendar').attr('lng');
                    var calDetalls = '';
                    for (var g = 0; g < eventsList.length; g++) {
                        var dat = new Date(eventsList[g].date);
                        if (year == dat.getFullYear() && month == dat.getMonth() && day == dat.getDate()) {
                            calDetalls += '<li>' + eventsList[g].date + '<a href="/post/' + eventsList[g].link + '">' + eventsList[g].post_title + '</a></li>';
                        }
                    }
                    $('.calendarBox .calView .calData').html(calDetalls);
                    $('.calendarBox .calView').fadeIn();
                    $('#calendar').addClass('blur');
                }
            });

        });
}

$(document).ready(function () {

    calendar("calendar", new Date().getFullYear(), new Date().getMonth());

    $('#calendar .prev').click(function () {
        calendar("calendar", $('#calendar').attr('year'), parseFloat($('#calendar').attr('month')) - 1);
    });

    $('#calendar .next').click(function () {
        calendar("calendar", $('#calendar').attr('year'), parseFloat($('#calendar').attr('month')) + 1);
    });

    $('.calendarBox .calView .closebtn').click(function (e) {
        e.preventDefault();
        $('.calendarBox .cal').fadeTo("fast", 1);
        $('.calendarBox .calView').fadeOut();
        $('#calendar').removeClass('blur');
    });
});
