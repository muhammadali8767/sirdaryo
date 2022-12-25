<header class="header">
    <!-- header top start -->
    <div class="header__top">
        <div class="container">
            <div class="header__top_row">
                <a href="{{ route('main') }}" class="header__top_logo">
                    <img src="/front/img/gerb_logo.png" alt="Logo image" class="header__top_logo-img">
                    <span class="header__top_logo-text">@lang("site.". str_replace(['http://', 'https://'], '', url('/')) ."_logo")</span>
                </a>
                @include('layouts.components.aloqa')
                <div class="header__top_translatebox">
                    <div class="translatebox">
                        <div class="dropdown">
                            <button class="btn btn-white dropdown-toggle lang-btn" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fal fa-language lang-icon"></i>
                                @switch(app()->getLocale())
                                    @case('en')
                                        En
                                    @break
                                    @case('ru')
                                        Ru
                                    @break

                                    @default
                                        Uz
                                    @break
                                @endswitch
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item @if (app()->getLocale() == 'uz') active @endif" href="?locale=uz">Uz</a></li>
                                <li><a class="dropdown-item @if (app()->getLocale() == 'ru') active @endif" href="?locale=ru">Ru</a></li>
                                <li><a class="dropdown-item @if (app()->getLocale() == 'en') active @endif" href="?locale=en">En</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="eyebox">
                        <div class="dropdown">
                            <button class="btn btn-white dropdown-toggle eye-btn" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-eye eyebox-icon"></i>
                                <p class="eyebox-text">
                                    @lang('menu.kozi ojizlar')
                                </p>
                            </button>
                            <ul class="dropdown-menu eye-dropdown-menu">
                                <li class="eye-item">
                                    @lang('menu.Tashqi korinish')
                                    <hr class="dropdown-divider">
                                </li>
                                <li class="d-flex align-items-center eye-item">
                                    <button class="eye-function-btn simple-theme">A</button>
                                    <button class="eye-function-btn gray-theme">A</button>
                                    <button class="eye-function-btn white-black-theme">A</button>
                                </li>
                                <li class="eye-item">
                                    @lang('menu.Shrift hajmi')
                                    <hr class="dropdown-divider">
                                </li>
                                <li class="eye-item">
                                    <p class="eye-function-info mb-0">
                                        <span>0%</span>
                                        @lang('menu.Kattalashtirish')
                                    </p>
                                    <input type="range" class="form-range window-range">
                                </li>
                                <li class="eye-item">
                                    <p class="eye-function-info mb-0">
                                        <span>0%</span>
                                        @lang('menu.Kattalashtirish')
                                    </p>
                                    <input type="range" class="form-range page-range">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header top end -->
</header>
