<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- FontAwesome Connect Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <!-- Bootstrap Link Connect -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- Owl-carousel Link Connect -->
    <link rel="stylesheet" href="/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="/owl-carousel/owl.theme.default.min.css">

    <!-- My Style Link Connect -->
    <link rel="stylesheet" href="/styles/style.css">
    <title>"Сирдарё" эркин иктисодий зонаси Дирекцияси – "Сирдарё" эркин иктисодий зонаси Дирекцияси расмий веб сайти
    </title>
</head>

<body>
    <div class="scroll__top">
        <i class="fas fa-arrow-alt-circle-up"></i>
    </div>

    @if (session('success'))
        <div id="success-alert" class="alert alert-success alert-dismissible fade show" role="alert"
            style="position: absolute ; width: 30%; left: 69%; top: 2%; z-index:100">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <header>
        @include('layouts.components.top')

        @include('layouts.components.menu')

        {{-- if index page --}}
        @if (request()->routeIs('main'))
            @include('layouts.components.carousel')
        @endif
    </header>

    @yield('content')

    @include('layouts.components.footer')

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>

    <script src="/owl-carousel/jquery.min.js"></script>
    <script src="/owl-carousel/owl.carousel.min.js"></script>
    <script src="/js/main.js"></script>
</body>

</html>
