@extends('layouts.main')

@section('content')

    <!-- SECTION ABOUT STARTING -->
    <section id="about">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-between pb-60">
                <div class="col-12 col-md-6 p-3 p-md-0 about__col">
                    <img class="img-fluid" style="min-height: 350px; object-fit: cover; object-position: 0 0;"
                        src="{{ $about->image }}">
                </div>
                <div class="col-12 col-md-6  pl-md-4 about__col">
                    <p class="green_text">{{ $about->title }}</p>
                    <h3>{{ $about->sub_title }}</h3>
                    <p class="about_index__text">{!! $about->text !!}</p>
                    <a href="{{ route('page', 'biz-haqimizda') }}">@lang('contact.Батафсил...')</a>
                </div>
            </div>
        </div>

        <div class="container-fluid about__map">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-12 col-sm-6 col-lg-3 py-4 py-lg-0 ">
                        <div class="map__box">
                            <p>@lang('menu.why')</p>
                            <div class="box__img">
                                <a href="{{ route('page', 'nima-ucun-sirdaryo-eiz') }}" class="icon-link">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                            {{-- <p class="info__number">440.7 млн</p> --}}
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 py-4 py-lg-0 ">
                        <div class="map__box">
                            <p>@lang('menu.start_business')</p>
                            <div class="box__img">
                                <a href="{{ route('page', 'biznesni-qandai-boslaiman') }}" class="icon-link">
                                    <i class="fa fa-briefcase"></i>
                                </a>
                            </div>
                            {{-- <p class="info__number">440.7 млн</p> --}}
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 py-4 py-lg-0 ">
                        <div class="map__box">
                            <p>@lang('menu.successful projects')</p>
                            <div class="box__img">
                                <a href="{{ route('page', 'muvofaqqiyatli-loiialar') }}" class="icon-link">
                                    <i class="fa fa-thumbs-up"></i>
                                </a>
                            </div>
                            {{-- <p class="info__number">440.7 млн</p> --}}
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 py-4 py-lg-0 ">
                        <div class="map__box">
                            <p>@lang('menu.preferences')</p>
                            <div class="box__img">
                                <a href="{{ route('page', 'imtiyoz-va-prefereciyalar') }}" class="icon-link">
                                    <i class="fa fa-check-square"></i>
                                </a>
                            </div>
                            {{-- <p class="info__number">440.7 млн</p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SECTION ABOUT END -->

    <!-- SECTION NEWS STARTING -->
    <section id="news">
        <div class="container">
            <div class="row">
                <div class="col-7 col-md-5 mx-auto news-btns">
                    {{-- <form action="{{ route('news') }}"> --}}
                        <button class="news__btn">@lang('contact.yangiliklar')</button>
                    {{-- </form> --}}
                    {{-- <form action="{{ route('multimedia') }}"> --}}
                        <button class="event__btn">@lang('contact.media')</button>
                    {{-- </form> --}}
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 mb-4 mb-md-0 big__news">
                    <div class="big__news__photos">
                        <img class="img-fluid" style="object-fit: cover;" src="{{ $lastPost->img }}">
                        <div class="shadow">
                            <a
                                href="{{ route('category_post', [$lastPost->category->slug, $lastPost->slug]) }}">Batafsil</a>
                        </div>
                    </div>
                    <span class="type">{{ $lastPost->category->title }}</span>
                    <h4 class="news__title">{{ $lastPost->title }}</h4>
                    <a class="news__text"
                        href="{{ route('category_post', [$lastPost->category->slug, $lastPost->slug]) }}">{{ $lastPost->short }}
                        </p>
                        <div class="info-time">
                            <i class="far fa-clock"></i>
                            <span>{{ $lastPost->created_at }}</span>
                            <i class="far fa-eye"></i>
                            <span>{{ $lastPost->seen }}</span>
                        </div>
                </div>
                <div class="col-12 col-md-6 small__news">
                    <div class="row mb-4">
                        @foreach ($posts as $post)
                            <div class="col-6">
                                <img class="img-fluid" src="{{ $post->img }}">
                                <span class="type">{{ $post->category->title }}</span>
                                <h4 class="news__title">{{ $post->title }}</h4>
                                <a class="news__text"
                                    href="{{ route('category_post', [$post->category->slug, $post->slug]) }}">{{ $post->short }}</a>
                                <div class="info-time">
                                    <i class="far fa-clock"></i>
                                    <span>{{ $post->created_at }}</span>
                                    <i class="far fa-eye"></i>
                                    <span>{{ $post->seen }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row news__line">
                <a href="{{ route('news') }}">@lang('contact.more')</a>
            </div>
        </div>
    </section>
    <!-- SECTION NEWS END -->

    @include('layouts.components.contact_form')

    <!-- SECTION CLIENT STARTING -->
    <section id="client">
        <div class="container">
            <div class="row">
                <div class="col-10 m-auto ">
                    <h2>@lang('contact.brand')</h2>
                    <div class="slider__brand owl-carousel">
                        <div class="slider__brand_item">
                            <img src="/images/hamkorlar/Asia Scotch..jpg" alt="png">
                        </div>
                        <div class="slider__brand_item">
                            <img src="/images/hamkorlar/AWP.jpg" alt="png">
                        </div>
                        <div class="slider__brand_item">
                            <img src="/images/hamkorlar/Dong Fang Po'lat Quvur..jpg" alt="png">
                        </div>
                        <div class="slider__brand_item">
                            <img src="/images/hamkorlar/Eco Wood Plyus!.jpg" alt="png">
                        </div>
                        <div class="slider__brand_item">
                            <img src="/images/hamkorlar/Eurasian Industrial Union..jpg"
                             alt="png">
                        </div>
                        <div class="slider__brand_item">
                            <img src="/images/hamkorlar/Inter Grain.jpg"
                             alt="png">
                        </div>
                        <div class="slider__brand_item">
                            <img src="/images/hamkorlar/Novugen Pharma..png"
                             alt="png">
                        </div>
                        <div class="slider__brand_item">
                            <img src="/images/hamkorlar/Peng Sheng.jpg"
                             alt="png">
                        </div>
                        <div class="slider__brand_item">
                            <img src="/images/hamkorlar/Pharm Plast Holding..png"
                             alt="png">
                        </div>
                        <div class="slider__brand_item">
                            <img src="/images/hamkorlar/Reka Med Farm..jpg"
                             alt="png">
                        </div>
                        <div class="slider__brand_item">
                            <img src="/images/hamkorlar/Sirdarya Metal Construction..jpg"
                             alt="png">
                        </div>
                        <div class="slider__brand_item">
                            <img src="/images/hamkorlar/Sirdaryo Erkin Iqtisody Zona.png"
                             alt="png">
                        </div>
                        <div class="slider__brand_item">
                            <img src="/images/hamkorlar/Sirdaryo Glass..jpg"
                             alt="png">
                        </div>
                        <div class="slider__brand_item">
                            <img src="/images/hamkorlar/Sirdaryo Mega Luks.jpg"
                             alt="png">
                        </div>
                        <div class="slider__brand_item">
                            <img src="/images/hamkorlar/Sirdaryo Universal Oyna..jpg"
                             alt="png">
                        </div>
                        <div class="slider__brand_item">
                            <img src="/images/hamkorlar/Sulpak Komputers..jpg"
                             alt="png">
                        </div>
                        <div class="slider__brand_item">
                            <img src="/images/hamkorlar/Temur Med Farm..jpg"
                             alt="png">
                        </div>
                        <div class="slider__brand_item">
                            <img src="/images/hamkorlar/Wang Da Rolling Steel..jpg"
                             alt="png">
                        </div>
                        <div class="slider__brand_item">
                            <img src="/images/hamkorlar/Wang Da Samorez..jpg"
                             alt="png">
                        </div>
                        <div class="slider__brand_item">
                            <img src="/images/hamkorlar/Wang Da Tai Tie..jpg"
                             alt="png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SECTION CLIENT END -->


@endsection
