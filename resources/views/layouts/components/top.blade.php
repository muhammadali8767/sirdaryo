<div class="container ">
    <div class="row header__logo__address align-items-center">
        <div class="col-md-6 col-sm-12 col-xs-12">
            <a href="{{ route('main') }}">
                <img src="/images/logo.png" alt="" class="logo">
                @lang('menu.logo')
            </a>
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="row">
                <div class="col-md-7 col-lg-8 col-sm-12">
                    <div class="input-group top_search">
                        <input type="text" class="form-control">
                        <div class="input-group-append">
                            <button class="btn search-button" type="button">@lang('menu.search')</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-lg-4 col-sm-12 align-right">
                    <div class="dropdown top_lang">
                        <button class="btn btn-block dropdown-toggle labg-button" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @switch(app()->getLocale())
                            @case('en') English @break
                            @case('ru') Русский @break
                            @default Ўзбекча @break
                            @endswitch
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            @if (app()->getLocale() != 'uz') <a class="dropdown-item" href="?locale=uz">Ўзбекча</a> @endif
                            @if (app()->getLocale() != 'ru') <a class="dropdown-item" href="?locale=ru">Русский</a> @endif
                            @if (app()->getLocale() != 'en') <a class="dropdown-item" href="?locale=en">English</a> @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="row header__weather-money justify-content-end">
            <div class="col-12 col-md-9 col-lg-4 d-flex text-lg-right justify-content-end align-items-center">
                {{-- <i class="fas fa-cloud-meatball weather-logo"></i> --}}
                <div class="weather" id="weather">
                    {{-- <p>+17 <span>C<sup>o</sup></span></p>
                    <div class="dropdown">
                        <button class="btn weather-dropdown-btn dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Uzbekiston
                        </button>

                    </div> --}}
                </div>
                <div class="dropdown ml-3">
                    <button class="btn money-btn dropdown-toggle valyuta-name" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    </button>
                    <div class="dropdown-menu money-dropdown-menu valyuta-list" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item valyuta" href="#" data-val="usd">USD</a>
                        <a class="dropdown-item valyuta" href="#" data-val="eur">EUR</a>
                        <a class="dropdown-item valyuta" href="#" data-val="rub">RUB</a>
                        <a class="dropdown-item valyuta" href="#" data-val="cny">CNY</a>
                    </div>
                </div>
                <div class="sell money-degree">
                    <span class="valyuta-show valyuta-text"></span><span class="valyuta-text">@lang("menu.Сум")</span>
                </div>
            </div>
        </div>
        </div>
