<footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 mb-4 mb-md-0">
                    <a href="index.html" class="header__top_logo">
                        <img src="/front/img/gerb_logo.png" alt="Logo image" class="header__top_logo-img">
                        <span class="header__top_logo-text">@lang('menu.logo')</span>
                    </a>
                </div>
                <div class="col-12 col-md-6 text-center text-md-end">
                    <img src="/front/img/2022.png" alt="year name" class="year-name-img">
                </div>
            </div>
            <div class="row footer-top-menu">
                <div class="col-12 col-sm-6 col-lg-3 mb-5 mb-lg-0">
                    <ul class="menu-list">
                        <li class="menu-item"><a class="menu-link" href="{{ route('directors') }}">@lang('menu.Rahbariyat')</a></li>
                        <li class="menu-item"><a class="menu-link" href="{{ route('page', App\Models\StaticPage::find(10)->slug) }}">{{ App\Models\StaticPage::find(10)->title }}</a></li>
                        <li class="menu-item"><a class="menu-link" href="{{ route('page', App\Models\StaticPage::find(11)->slug) }}">{{ App\Models\StaticPage::find(11)->title }}</a></li>
                        {{-- <li class="menu-item"><a class="menu-link" href="{{ route('page', App\Models\StaticPage::find(18)->slug) }}">{{ App\Models\StaticPage::find(18)->title }}</a></li> --}}
                        <li class="menu-item"><a class="menu-link" href="{{ route('page', App\Models\StaticPage::find(19)->slug) }}">{{ App\Models\StaticPage::find(19)->title }}</a></li>
                        <li class="menu-item"><a class="menu-link" href="{{ route('qabul') }}">@lang('menu.Hokimga murojaat')</a></li>
                        <li class="menu-item"><a class="menu-link" href="{{ route('category', ['slug' => 'korrupsiyaga-qarshi-kurashish']) }}">@lang('menu.Korupsiya')</a></li>

                    </ul>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 mb-5 mb-lg-0">

                    <ul class="menu-list">
                        <li class="menu-item">@lang('menu.Mahalliy Kengash')</li>
                        <li class="menu-item"><a href="{{ route('senators') }}" class="menu-link">@lang('menu.Senat azolari')</a></li>
                        <li class="menu-item"><a href="{{ route('deputats') }}" class="menu-link">@lang('menu.Deputatlar tarkibi')</a></li>
                        <li class="menu-item"><a href="{{ route('kotibs') }}" class="menu-link">@lang('menu.Kotibiyat mudirlari')</a></li>
                        <li class="menu-item"><a href="{{ route('decrees') }}" class="menu-link">@lang('menu.Qabul qilingan qarorlar')</a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 mb-5 mb-lg-0">
                    <ul class="menu-list">
                        <li class="menu-item">@lang('menu.Matbuot xizmati')</li>
                        <li class="menu-item"><a href="media-xizmat.html" class="menu-link">Media xizmati haqida</a></li>
                        <li class="menu-item"><a href="#" class="menu-link">Media rejalar</a></li>
                        <li class="menu-item"><a href="vebsayt-malumotlar.html" class="menu-link">Veb saytda joylashtirilgan
                                ma'lumotlar</a></li>
                        <li class="menu-item"><a href="/front/axborot-olish.html" class="menu-link">Axborot olish uchun
                                so'rovlarni qabul qilish tartibi</a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 mb-5 mb-lg-0">
                    <ul class="menu-list">
                        <li class="menu-item"><a href="/front/aloqa.html" class="menu-link">@lang('menu.Aloqa')</a></li>
                        <li class="menu-item"><a href="/front/news.html" class="menu-link">@lang('menu.Yangiliklar')</a></li>
                        <li class="menu-item"><a href="#" class="menu-link">@lang('menu.Ochiq malumotlar')</a></li>
                        <li class="menu-item"><a href="#" class="menu-link">@lang('menu.Boshqarma va tashkilotlar')</a></li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-6 mb-3 mb-sm-5 mb-lg-0">
                    <div class="contact-box">
                        <h5 class="contact-title">@lang('menu.Aloqa')</h5>
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
                            <a href="tel: +998672254090" class="tel_nomer">
                                <i class="fas fa-phone-alt tel_nomer-icon"></i>
                                +998 (67) 390-13-58
                            </a>
                            <div class="messenger__icons">
                                <a href="https://www.facebook.com/Boyovut.tumani.hokimligi/">
                                    <i class="fab fa-facebook-f"></i>
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
                </div>
                <div class="col-12 col-lg-6">
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
    <div class="footer-end">
        <div class="container">
            <p class="end-text">
                © <span class="current-year">2022</span> <a href="https://itlive.uz" class="producer">IT-Live</a>.
                All
                rights reserved.
            </p>
        </div>
    </div>
</footer>
