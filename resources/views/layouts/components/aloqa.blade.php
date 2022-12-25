<div class="header__top_text">
    <i class="fas fa-map-marker-alt header__top_text-icon"></i>
    <p class="header__top_text-text">
        @lang("site.". str_replace(['http://', 'https://'], '', url('/')) ."_location")

    </p>
</div>

<div class="header__top_text">
    <i class="fas fa-clock header__top_text-icon"></i>
    <p class="header__top_text-text">
        @lang('menu.qabul vaqtlari')
    </p>
</div>

<div class="header__top_connect">
    <a href="tel: @lang("site.". str_replace(['http://', 'https://'], '', url('/')) ."_phone_call")" class="tel_nomer">
        <i class="fas fa-phone-alt tel_nomer-icon"></i>
        @lang("site.". str_replace(['http://', 'https://'], '', url('/')) ."_phone")
    </a>
    <div class="messenger__icons">
        @lang("site.". str_replace(['http://', 'https://'], '', url('/')) ."_social")
    </div>
</div>
