<div class="header__navbar">
    <div class="container">
        <div class="header__navbar_row">
            <div class="header__navbar_bars">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <ul class="primary-menu header__navbar_list">
                <li class="header__navbar_item">
                    @lang('menu.Hokimiyat haqida')
                    <ul>
                        <li><a href="{{ route('directors') }}">@lang('menu.Rahbariyat')</a></li>
                        <li><a href="{{ route('page', App\Models\StaticPage::find(10)->slug) }}">{{ App\Models\StaticPage::find(10)->title }}</a></li>
                        <li><a href="{{ route('page', App\Models\StaticPage::find(11)->slug) }}">{{ App\Models\StaticPage::find(11)->title }}</a></li>
                        <li><a href="{{ route('page', App\Models\StaticPage::find(18)->slug) }}">{{ App\Models\StaticPage::find(18)->title }}</a></li>
                        <li><a href="{{ route('page', App\Models\StaticPage::find(19)->slug) }}">{{ App\Models\StaticPage::find(19)->title }}</a></li>
                        <li><a href="{{ route('qabul') }}">@lang('menu.Hokimga murojaat')</a></li>
                        <li><a href="korrupsiyaga-qarshi-kurashish.html">@lang('menu.Korupsiya')</a></li>
                    </ul>
                </li>
                <li class="header__navbar_item">
                    <a href="{{ route('news') }}" home-link>@lang('menu.Yangiliklar')</a>
                </li>
                <li class="header__navbar_item">
                    @lang('menu.Boshqarma va tashkilotlar')
                </li>
                <li class="header__navbar_item">
                    @lang('menu.Mahalliy Kengash')
                    <ul>
                        <li><a href="{{ route('page', App\Models\StaticPage::find(20)->slug) }}">{{ App\Models\StaticPage::find(20)->title }}</a></li>
                        <li><a href="{{ route('page', App\Models\StaticPage::find(21)->slug) }}">{{ App\Models\StaticPage::find(21)->title }}</a></li>
                        <li><a href="{{ route('page', App\Models\StaticPage::find(22)->slug) }}">{{ App\Models\StaticPage::find(22)->title }}</a></li>
                    </ul>
                </li>
                <li class="header__navbar_item">
                    @lang('menu.Matbuot xizmati')
                    <ul>
                        <li><a href="{{ route('page', App\Models\StaticPage::find(13)->slug) }}">{{ App\Models\StaticPage::find(13)->title }}</a></li>
                        <li><a href="{{ route('page', App\Models\StaticPage::find(14)->slug) }}">{{ App\Models\StaticPage::find(14)->title }}</a></li>
                        <li><a href="{{ route('page', App\Models\StaticPage::find(15)->slug) }}">{{ App\Models\StaticPage::find(15)->title }}</a></li>
                        <li><a href="{{ route('page', App\Models\StaticPage::find(16)->slug) }}">{{ App\Models\StaticPage::find(16)->title }}</a></li>
                    </ul>
                </li>
                <li class="header__navbar_item">
                    <a href="{{ route('contact') }}" home-link>@lang("menu.Aloqa")</a>
                </li>
                <li class="header__navbar_item">
                    <a href="{{ route('page', App\Models\StaticPage::find(17)->slug) }}">{{ App\Models\StaticPage::find(17)->title }}</a>
                </li>
            </ul>

            <div class="big-nav-list deactive d-none d-lg-block">
                <div class="container">
                    <div class="row mb-3">
                        <div class="header__navbar_bars active">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <ul class="header__navbar_list">
                        <li class="header__navbar_item">
                            @lang('menu.Hokimiyat haqida')
                            <ul>
                                <li><a href="{{ route('directors') }}">@lang('menu.Rahbariyat')</a></li>
                                <li><a href="{{ route('page', App\Models\StaticPage::find(10)->slug) }}">{{ App\Models\StaticPage::find(10)->title }}</a></li>
                                <li><a href="{{ route('page', App\Models\StaticPage::find(11)->slug) }}">{{ App\Models\StaticPage::find(11)->title }}</a></li>
                                <li><a href="{{ route('page', App\Models\StaticPage::find(18)->slug) }}">{{ App\Models\StaticPage::find(18)->title }}</a></li>
                                <li><a href="{{ route('page', App\Models\StaticPage::find(19)->slug) }}">{{ App\Models\StaticPage::find(19)->title }}</a></li>
                                <li><a href="{{ route('qabul') }}">@lang('menu.Hokimga murojaat')</a></li>
                                <li><a href="korrupsiyaga-qarshi-kurashish.html">@lang('menu.Korupsiya')</a></li>
                            </ul>
                        </li>
                        <li class="header__navbar_item">
                            <a href="news.html" home-link>@lang('menu.Yangiliklar')</a>
                        </li>
                        <li class="header__navbar_item">
                            @lang('menu.Boshqarma va tashkilotlar')
                        </li>
                        <li class="header__navbar_item">
                            @lang('menu.Mahalliy Kengash')
                            <ul>
                                <li><a href="{{ route('page', App\Models\StaticPage::find(20)->slug) }}">{{ App\Models\StaticPage::find(20)->title }}</a></li>
                                <li><a href="{{ route('page', App\Models\StaticPage::find(21)->slug) }}">{{ App\Models\StaticPage::find(21)->title }}</a></li>
                                <li><a href="{{ route('page', App\Models\StaticPage::find(22)->slug) }}">{{ App\Models\StaticPage::find(22)->title }}</a></li>
                            </ul>
                        </li>
                        <li class="header__navbar_item">
                          @lang('menu.Matbuot xizmati')
                            <ul>
                                <li><a href="{{ route('page', App\Models\StaticPage::find(13)->slug) }}">{{ App\Models\StaticPage::find(13)->title }}</a></li>
                                <li><a href="{{ route('page', App\Models\StaticPage::find(14)->slug) }}">{{ App\Models\StaticPage::find(14)->title }}</a></li>
                                <li><a href="{{ route('page', App\Models\StaticPage::find(15)->slug) }}">{{ App\Models\StaticPage::find(15)->title }}</a></li>
                                <li><a href="{{ route('page', App\Models\StaticPage::find(16)->slug) }}">{{ App\Models\StaticPage::find(16)->title }}</a></li>
                            </ul>
                        </li>
                        <li class="header__navbar_item">
                            <a href="{{ route('contact') }}" home-link>@lang("menu.Aloqa")</a>
                        </li>
                        <li class="header__navbar_item">
                            <a href="{{ route('page', App\Models\StaticPage::find(17)->slug) }}">{{ App\Models\StaticPage::find(17)->title }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
