<header class="header">
    <!-- header top start -->
    <div class="header__top">
        <div class="container">
            <div class="header__top_row">
                <a href="{{ route('main') }}" class="header__top_logo">
                    <img src="/front/img/gerb_logo.png" alt="Logo image" class="header__top_logo-img">
                    <span class="header__top_logo-text">Boyovut tuman hokimligi</span>
                </a>

                <div class="header__top_text">
                    <i class="fas fa-map-marker-alt header__top_text-icon"></i>
                    <p class="header__top_text-text">
                        Boyovut tumani "Ijodkor" mahallasi Jayxun ko'chasi 5-uy
                    </p>
                </div>

                <div class="header__top_text">
                    <i class="fas fa-clock header__top_text-icon"></i>
                    <p class="header__top_text-text">
                        Dushanba - Juma, 9:00 - 18:00,
                        Tushlik 13:00-14:00
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
                        <a href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://www.instagram.com/boyovut_ovozi/">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://t.me/Boyovutliklar">
                            <i class="fab fa-telegram"></i>
                        </a>
                        <a href="https://www.youtube.com/@boyovuttumani">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>

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
                                    Ko'zi ojizlar uchun
                                </p>
                            </button>
                            <ul class="dropdown-menu eye-dropdown-menu">
                                <li class="eye-item">
                                    Tashqi ko'rinish
                                    <hr class="dropdown-divider">
                                </li>
                                <li class="d-flex align-items-center eye-item">
                                    <button class="eye-function-btn simple-theme">A</button>
                                    <button class="eye-function-btn gray-theme">A</button>
                                    <button class="eye-function-btn white-black-theme">A</button>
                                </li>
                                <li class="eye-item">
                                    Shrift hajmi
                                    <hr class="dropdown-divider">
                                </li>
                                <li class="eye-item">
                                    <p class="eye-function-info mb-0">
                                        <span>0%</span>
                                        Kattalashtirish
                                    </p>
                                    <input type="range" class="form-range window-range">
                                </li>
                                <li class="eye-item">
                                    <p class="eye-function-info mb-0">
                                        <span>0%</span>
                                        Kattalashtirish
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
