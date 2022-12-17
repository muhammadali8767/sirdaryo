@extends('layouts.main')

@section('content')
        <!-- main slider start -->
        <section class="contact-page">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xl-9 px-0">
                        <div class="container">
                            <h2 class="section-title mb-30">
                                @lang('menu.Aloqa')
                            </h2>
                            <div class="row align-items-center">
                                <div class="col-12 col-lg-5 mb-3 mb-sm-5 mb-lg-0">
                                    <div class="header__top_text">
                                        <i class="fas fa-map-marker-alt header__top_text-icon"></i>
                                        <p class="header__top_text-text">
                                            @lang('menu.location')
                                        </p>
                                    </div>

                                    <div class="header__top_text">
                                        <i class="fas fa-clock header__top_text-icon"></i>
                                        <p class="header__top_text-text">
                                            @lang('menu.qabul vaqtlari')
                                        </p>
                                    </div>

                                    <div class="header__top_connect">
                                        <a href="tel: +998673901358" class="tel_nomer">
                                            <i class="fas fa-phone-alt tel_nomer-icon"></i>
                                            +998 (67) 390-13-58
                                        </a>
                                        <div class="messenger__icons">
                                            <a href="https://www.facebook.com/Boyovut.tumani.hokimligi/">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                            <a href="">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                            <a href="https://www.instagram.com/boyovut_ovozi/">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                            <a href="https://t.me/Boyovutliklar">
                                                <i class="fab fa-telegram"></i>
                                            </a>
                                            <a href="https://www.instagram.com/boyovut_ovozi/">
                                                <i class="fab fa-youtube"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-7 mb-3 mb-sm-5 mb-lg-0">
                                    <div class="map-box">

                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d194548.1579493252!2d68.82140268564972!3d40.368626953275815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1ssirdaryo%20viloyati%20boyovut%20tuman%20hokimligi!5e0!3m2!1sen!2s!4v1669545239561!5m2!1sen!2s"
                                            style="border:0;" allowfullscreen="" loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade"></iframe>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-3 px-0">
                        @include('layouts.components.calendar')
                    </div>
                </div>
            </div>
        </section>
        <!-- main slider end -->


@endsection


