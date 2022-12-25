<footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 mb-4 mb-md-0">
                    <a href="index.html" class="header__top_logo">
                        <img src="/front/img/gerb_logo.png" alt="Logo image" class="header__top_logo-img">
                        <span class="header__top_logo-text">@lang("site.". str_replace(['http://', 'https://'], '', url('/')) ."_logo")</span>
                    </a>
                </div>
                <div class="col-12 col-md-6 text-center text-md-end">
                    <img src="/front/img/2022.png" alt="year name" class="year-name-img">
                </div>
            </div>
            <div class="row footer-top-menu">
                <div class="col-12 col-sm-6 col-lg-3 mb-5 mb-lg-0">
                    <ul class="menu-list">
                        <li class="menu-item">@lang('menu.Hokimiyat haqida')</li>
                        <li class="menu-item"><a class="menu-link" href="{{ route('directors') }}" >@lang('menu.Rahbariyat')</a></li>
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
                        @include('layouts.components.aloqa')
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    @include('layouts.components.map')
                </div>
            </div>
        </div>
    </div>
    <div class="footer-end">
        <div class="container">
            <p class="end-text">
                © <span class="current-year">@php date('Y') @endphp</span> <a href="https://itlive.uz" class="producer">IT-Live</a>.
                @lang('footer.rights')
            </p>
        </div>
    </div>
</footer>
