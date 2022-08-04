<!-- FOOTER STARTING -->
<footer>
    <div class="container">
        <div class="row justify-content-md-center justify-content-between ">
            <div class="col-12 col-md-6 col-lg-3">
                <div class="footer__logo">
                    <a href="index.html" class="footer__logo-img">
                        <img src="/images/logouzb.png" alt="png" class="logo">
                        @lang('menu.logo')
                    </a>
                    <p>@lang('footer.<span>Эркин иқтисодий зона</span> — минтақани жадал ижтимоий-иқтисодий ривожлантириш ...')</p>

                    <a href="{{ route('page', 'biz-haqimizda') }}" class="more">@lang('footer.Батафсил...')</a>

                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="footer__about">
                    <h3>@lang('footer.БИЗ ХАҚИМИЗДА')</h3>
                    <ul>
                        <li>
                            <a href="{{ route('page', 'sirdaryo-eiz-direkciyasi') }}">@lang('menu.direction')</a>
                        </li>
                        <li>
                            <a href="{{ route('page', 'sirdaryo-eizning-vazifalari') }}">@lang('menu.council') </a>
                        </li>
                        <li>
                            <a href="{{ route('page', 'sirdaryo-eiz-mamurii-kengasi') }}">@lang('menu.functions')</a>
                        </li>
                        {{-- <li><a href="#!">@lang('footer.Инфратузилма')</a></li> --}}
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="footer__about_bussiness">
                    <h3>@lang('footer.«Сирдарё» ЭИЗда Бизнес')</h3>
                    <ul>
                        <li>
                            <a
                                href="{{ route('page', 'biznesni-qandai-boslaiman') }}">@lang('menu.start_business')</a>
                        </li>
                        <li>
                            <a href="{{ route('page', 'sirdaryo-eizda-faoliyat-turlari') }}">@lang('menu.types of
                                activities') </a>
                        </li>
                        <li>
                            <a href="{{ route('page', 'nima-ucun-sirdaryo-eiz') }}">@lang('menu.why')</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 ">
                <div class="footer__media">
                    <h3>@lang('footer.Мултимедиа')</h3>
                    <ul class="row">
                        <li>
                            <a href="#!"><img src="/images/photo 1.png" alt="png"></a>
                        </li>
                        <li>
                            <a href="#!"><img src="/images/photo 2.png" alt="png"></a>
                        </li>
                        <li>
                            <a href="#!"><img src="/images/photo 3.png" alt="png"></a>
                        </li>
                        <li>
                            <a href="#!"><img src="/images/photo 4.png" alt="png"></a>
                        </li>
                    </ul>
                    <ul class="row">
                        <li>
                            <a href="#!"><img src="/images/photo 1.png" alt="png"></a>
                        </li>
                        <li>
                            <a href="#!"><img src="/images/photo 2.png" alt="png"></a>
                        </li>
                        <li>
                            <a href="#!"><img src="/images/photo 3.png" alt="png"></a>
                        </li>
                        <li>
                            <a href="#!"><img src="/images/photo 4.png" alt="png"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row  justify-content-between  px-0 mt-3 mt-md-5 pt-3 pt-md-5 footer__line">
            <div class="col-12 col-md-6">
                <ul class="row ">

                    <li>
                        {{-- http://fezsirdaryo.test/uz/page/biz-haqimizda --}}
                        <a href="{{ route('page', 'biz-haqimizda') }}">@lang('footer.САЙТ ҲАҚИДА')</a>
                    </li>
                    <li>
                        <a href="#!">@lang('footer.САЙТ ХАРИТАСИ')</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}">@lang('footer.ҚАЙТА АЛОҚА')</a>
                    </li>
                </ul>
                <p>@lang('footer.start-end', ['start' => 2018, 'end' => date('Y')])</p>
            </div>
            <div class="col-12 col-md-4 ">
                {{-- <ul class="row  justify-content-lg-end social">
                    <li>@lang('footer.Ижтимоий тармоқлар'):</li>
                    <li> <a href="#"><i class="fab fa-facebook"></i></a></li>
                    <li> <a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li> <a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul> --}}
                <p class="text">
                    @lang('footer.sayt', [
                        'site' => '<a href="#" style="color:black">"IT LIVE"</a>']
                    )
                </p>

            </div>
        </div>
    </div>
</footer>
<!-- FOOTER END      -->
