<form action="{{ route('post-contact') }}" method="POST" class="mb-3">
    @csrf
    <div class="row">
        <div class="col">
            <input type="text" name="name" class="form-control" placeholder="@lang('contact.name')">
        </div>
        <div class="col">
            <input type="text" name="location" class="form-control" placeholder="@lang('contact.mavzu')">
        </div>
    </div>

    <div class="mb-3 mt-3">

        <input type="number" name="phone" class="form-control" placeholder="@lang('contact.phone')">
    </div>
    <div class="mb-3">
        <textarea class="form-control" name="text" id="comment" rows="7" placeholder="@lang('contact.text')"></textarea>
    </div>

    <div class="bg-3 bt-3">
        <button type="submit" class="btn contact__btn">@lang('contact.yuborish')</button>
    </div>
</form>

<!-- Async script executes immediately and must be after any DOM elements used in callback. -->
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDyRWpYZQwk45PQBLF4Fy6DAGqEJRkeetw&callback=initMap&libraries=&v=weekly"
    async>
</script>
<script>
    // Initialize and add the map
    function initMap() {
        // The location of Uluru
        const uluru = {
            lat: 40.504009,
            lng: 68.775202
        };
        // The map, centered at Uluru
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 16,
            center: uluru,
        });
        // The marker, positioned at Uluru
        const marker = new google.maps.Marker({
            position: uluru,
            map: map,
        });
    }
</script>
