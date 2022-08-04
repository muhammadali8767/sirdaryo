    <!-- SECTION CONTACT FORM STARTING -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 form__parent">
                    <form action="{{ route('post-contact') }}" method="POST">
                        @csrf
                        <h4>@lang('contact.contact_title')
                        </h4>
                        <div class="input__box">
                            <input type="text" name="name" placeholder="@lang('contact.name')" required>
                            <input type="text" name="phone" placeholder="@lang('contact.phone')" required>
                        </div>
                        <div class="input__box">
                            <input type="text" name="location" placeholder="@lang('contact.theme')" required style="width: 100%">
                        </div>
                        <textarea name="text" cols="30" rows="10" placeholder="@lang('contact.text')" required></textarea>
                        <button type="submit">@lang('contact.yuborish')</button>
                        <div class="number-mail">
                            <div class="number-box">
                                <i class="fas fa-phone-alt"></i>
                                <div>
                                    <p>@lang('contact.Биз билан боғланиш учун')</p>
                                    <h5>+998 67 227 00 37</h5>
                                    <h5>+998 97 755-74-73</h5>
                                </div>
                            </div>
                            <div class="mail-box">
                                <i class="far fa-envelope"></i>
                                <div>
                                    <p>@lang('contact.Биз билан боғланиш учун')</p>
                                    <h5>fezsirdarya@gmail.com</h5>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 d-none d-md-block ">
                    <div class="form__img">
                        <img src="/images/contact_img.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-12 mt-5">
                    <!--The div element for the map -->
                    <div id="map" style="height: 400px; width: 100%;"></div>
                </div>
            </div>
        </div>
    </section>    <!-- SECTION CONTACT FORM END -->

    <!-- SECTION MAP STARTING -->
    {{-- <section id="map">
        <div class="container">
            <div class="row">
                <div class="col-12 maps__box">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3034.9216704383653!2d68.77543542382799!3d40.47699787062319!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38b2075214f36a35%3A0x92824d9a089e8042!2z0KHRi9GA0LTQsNGA0YzQuNC90YHQutC40Lkg0L7QsdC70LDRgdGC0L3QvtC5INGE0LjQu9C40LDQuyDQntCe0J4g4oCcSVQt0J_QsNGA0LrigJ0!5e0!3m2!1suz!2s!4v1636132822995!5m2!1suz!2s"
                        style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- SECTION MAP END -->

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
