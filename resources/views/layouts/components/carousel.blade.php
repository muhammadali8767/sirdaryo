<div class="container-fluid header__bg d-flex justify-content-center p-0">
    <div class="container">
        <div class="sliders owl-carousel">
            <div class="slide">
                <h1>@lang('carousel.БИЗНEСИНГИЗНИ  <br> САМАРАЛИ БОШҚАРИНГ')</h1>
                <p>@lang('carousel.Бизнесингизни қандай қўллаб-қувватлашимиз ҳақида кўпроқ билмоқчи <br> бўлсангиз, дўстона жамоамизга қўнғироқ қилинг.')</p>
                <div class="slider__btns">
                    <a class="more_info" href="{{ route('page', 'biznesni-qandai-boslaiman') }}">@lang('carousel.Батафсил')</a>
                    <a class="contact__btn" href="{{ route('contact') }}">@lang('carousel.Боғланиш')</a>
                </div>
            </div>
            <div class="slide">
                <h1>@lang('carousel.жамоамизга <br> қўнғироқ қилинг')</h1>
                <p>@lang('carousel.Бизнесингизни қандай қўллаб-қувватлашимиз ҳақида кўпроқ билмоқчи <br> бўлсангиз, дўстона жамоамизга қўнғироқ қилинг.')</p>
                <div class="slider__btns">
                    <a class="more_info" href="{{ route('page', 'biznesni-qandai-boslaiman') }}">@lang('carousel.Батафсил')</a>
                    <a class="contact__btn" href="{{ route('contact') }}">@lang('carousel.Боғланиш')</a>
                </div>
            </div>
        </div>
        <a href="#about">
            <i class="fas fa-arrow-down header__down_btn"></i>
        </a>
        <div class="header__progress">
            <div class="progress__line"></div>
        </div>
        <div class="row d-flex align-items-center mb-2 mb-md-5">
            <div class="col-6">
                <ul class="afzallik">
                    <li>@lang('carousel.БИЗНИНГ АФЗАЛЛИКЛАРИМИЗ ҚУЙИДАГИЧА')</li>
                </ul>
            </div>
            <div class="col-6">
                <p class="dostona">@lang('carousel.Бизнесингизни қандай қўллаб-қувватлашимиз ҳақида кўпроқ билмоқчи <br> бўлсангиз, дўстона жамоамизга қўнғироқ қилинг.')</p>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-12 col-md-6 col-lg-4 my-2 ">
                <div class="trinity__boxes">
                    <div class="trinity__boxes-text">
{{--
                            <a href="{{ route('page', 'sirdaryo-eizda-faoliyat-turlari') }}">@lang('menu.types of activities')</a>
                            <a href="{{ route('page', 'muvofaqqiyatli-loiialar') }}">@lang('menu.successful projects')</a> --}}

                        <h5>@lang('menu.start_business')</h5>
                        <a href="{{ route('page', 'biznesni-qandai-boslaiman') }}">
                            <i class="fas fa-arrow-up"></i>
                        </a>
                    </div>
                    <img class="trinity__boxes-img" src="/images/header_small_img.png" alt="">
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 my-2">
                <div class="trinity__boxes">
                    <div class="trinity__boxes-text">
                        <h5>@lang('menu.why')</h5>
                        <a href="{{ route('page', 'nima-ucun-sirdaryo-eiz') }}">
                            <i class="fas fa-arrow-up"></i>
                        </a>
                    </div>
                    <img class="trinity__boxes-img" src="/images/header_small_img.png" alt="">
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 my-2">
                <div class="trinity__boxes">
                    <div class="trinity__boxes-text">
                        <h5>@lang('menu.preferences')</h5>
                        <a href="{{ route('page', 'imtiyoz-va-prefereciyalar') }}">
                            <i class="fas fa-arrow-up"></i>
                        </a>
                    </div>
                    <img class="trinity__boxes-img" src="/images/header_small_img.png" alt="">
                </div>
            </div>
        </div>

    </div>
</div>
