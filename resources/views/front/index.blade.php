@extends('layouts.main')

@section('content')
    <!-- main slider start -->
    <section class="example-page">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 col-xl-9 px-0">
                    <div class="row">
                        <div class="col-12 col-xxl-5 news-big-box">
                            <div class="container ps-xl-0">
                                <div class="example-slider">
                                    @foreach ($posts as $post)
                                        <div class="example-slider-item">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="news-img">
                                                        <img src="{{ $post->img }}" class="" alt="Images">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="news-info-box">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <div class="date-view">
                                                                <i class="fas fa-calendar"></i>
                                                                <span
                                                                    class="hours">{{ $post->created_at->format('H:i') }}</span>
                                                                / <span
                                                                    class="date">{{ $post->created_at->format('d.m.Y') }}</span>
                                                            </div>
                                                            <div class="date-view">
                                                                <i class="fas fa-eye"></i>
                                                                <span class="view-numbers">
                                                                    {{ $post->seen }}
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <a href="#" class="news-short-title marked-links">
                                                            {{ $post->title }}
                                                        </a>
                                                        <p class="news-description">
                                                            {{ $post->short }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xxl-7">
                            <div class="container">
                                <h2 class="section-title mb-1">@lang("front.So'nggi yangiliklar")</h2>
                                @foreach ($posts as $post)
                                    <div class="col-12 border-top mt-3 pt-3">
                                        <div class="news-info-box">
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="date-view">
                                                    <i class="fas fa-calendar"></i>
                                                    <span class="hours">{{ $post->created_at->format('H:i') }}</span> /
                                                    <span class="date">{{ $post->created_at->format('d.m.Y') }}</span>
                                                </div>
                                                <div class="date-view">
                                                    <i class="fas fa-eye"></i>
                                                    <span class="view-numbers">
                                                        {{ $post->seen }}
                                                    </span>
                                                </div>
                                            </div>
                                            <a href="#" class="news-short-title">
                                                {{ $post->title }}
                                            </a>
                                            <p class="news-description">
                                                {{ $post->short }}
                                            </p>
                                        </div>
                                    </div>
                                @endforeach

                                <div class="all-btn-container pb-4 text-end">
                                    <a href="./news.html" class="news-all-btn">@lang('front.Barcha yangiliklar')</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-xl-3 px-0">
                    <div class="container pe-xl-0">
                        <table class="fast-connect-parent mb-50">
                            <tr>
                                <td class="fast-connect-box">
                                    <a href="#" class="box">
                                        <div class="fast-connect-img">
                                            <img src="/front/img/fast_connect1.png" alt="">
                                        </div>
                                        <span class="fast-connect-text">@lang('sidebar.O‘z fikrlaringizni yuboring')</span>
                                    </a>
                                </td>
                                <td class="fast-connect-box">
                                    <a href="#" class="box">
                                        <div class="fast-connect-img">
                                            <img src="/front/img/fast_connect2.png" alt="">
                                        </div>
                                        <span class="fast-connect-text">@lang('sidebar.Hokimga murojaat')</span>
                                    </a>
                                </td>
                                <td class="fast-connect-box">
                                    <a href="#" class="box">
                                        <div class="fast-connect-img">
                                            <img src="/front/img/fast_connect3.png" alt="">
                                        </div>
                                        <span class="fast-connect-text">@lang('sidebar.Muammolar haqida xabar bering')</span>
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- main slider end -->


    <!-- news section start -->
    <section class="py-5">
        <div class="container">
            <!-- SLIDER START -->
            <div class="news-slider">
                <div class="news-slider-item">
                    <div class="fast-connect-box">
                        <a href="http://sirdaryo.uz/uz/category/savol-zhavob" class="box">
                            <div class="fast-connect-img">
                                <img src="/front/img/fast_connect3.png" alt="">
                            </div>
                            <span class="fast-connect-text">@lang("useful_links.Ko\'p so\'raladigan savollar")</span>
                        </a>
                    </div>
                </div>
                <div class="news-slider-item">
                    <div class="fast-connect-box">
                        <a href="https://ish2.mehnat.uz/vacancies" class="box">
                            <div class="fast-connect-img">
                                <img src="/front/img/fast_connect3.png" alt="">
                            </div>
                            <span class="fast-connect-text">@lang("useful_links.Bo'sh ish o'rinlari")</span>
                        </a>
                    </div>
                </div>
                <div class="news-slider-item">
                    <div class="fast-connect-box">
                        <a href="https://e-auksion.uz/lots?1&index=1&page=1&order=1&region=5&lt=0&at=0" class="box">
                            <div class="fast-connect-img">
                                <img src="/front/img/fast_connect3.png" alt="">
                            </div>
                            <span class="fast-connect-text">@lang("useful_links.Elektron online-auksion")</span>
                        </a>
                    </div>
                </div>
                <div class="news-slider-item">
                    <div class="fast-connect-box">
                        <a href="#" class="box">
                            <div class="fast-connect-img">
                                <img src="/front/img/fast_connect3.png" alt="">
                            </div>
                            <span class="fast-connect-text">@lang("useful_links.Korupsiyaga qarshi")</span>
                        </a>
                    </div>
                </div>
                <div class="news-slider-item">
                    <div class="fast-connect-box">
                        <a href="http://sirdaryo.uz/uz/docs/sirdaryo-viloyati-mahallij-budzhetning-asosij-parametrlari" class="box">
                            <div class="fast-connect-img">
                                <img src="/front/img/fast_connect3.png" alt="">
                            </div>
                            <span class="fast-connect-text">@lang("useful_links.Mahalliy budjetning daromad va xarajatlari")</span>
                        </a>
                    </div>
                </div>
                <div class="news-slider-item">
                    <div class="fast-connect-box">
                        <a href="https://e-qaror.gov.uz/uz/site/list?DocumentSearch%5Btitle%5D=&DocumentSearch%5Bdocument_type_id%5D=&DocumentSearch%5Bdecision_type_id%5D=&DocumentSearch%5Bauthority_id%5D=7580&DocumentSearch%5Bdecision_number%5D=&DocumentSearch%5Bvisitation_end%5D=&page=" class="box">
                            <div class="fast-connect-img">
                                <img src="/front/img/fast_connect3.png" alt="">
                            </div>
                            <span class="fast-connect-text">@lang("useful_links.Viloyat hokimining qaror va faroyishlari")</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- SLIDER END -->
        </div>
    </section>
    <!-- news section end -->

    <!-- statistic numbers section start -->
    <section class="numbers">
        <div class="container">
            <h2 class="section-title">@lang('front.raqamlarda')</h2>
            <div class="row">
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="numbers-box">
                        <div class="numbers-info">
                            <div class="numbers-img">
                                <img src="/front/img/small_news.png" alt="">
                            </div>
                            <div class="numbers-protsent">

                                <h6 class="protsent">
                                    <span class="counter-value" data-count="38.7">0</span>
                                    %
                                </h6>
                                <p class="protsent-desc">
                                    2021 йилнинг январ-март ойига нисбатан фоизи
                                </p>
                            </div>
                        </div>
                        <h5 class="numbers-title">
                            Ташкил этилган кичик бизнес субеъктлари сони
                        </h5>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="numbers-box">
                        <div class="numbers-info">
                            <div class="numbers-img">
                                <img src="/front/img/small_news.png" alt="">
                            </div>
                            <div class="numbers-protsent">

                                <h6 class="protsent">
                                    <span class="counter-value" data-count="38.7">0</span>
                                    %
                                </h6>
                                <p class="protsent-desc">
                                    2021 йилнинг январ-март ойига нисбатан фоизи
                                </p>
                            </div>
                        </div>
                        <h5 class="numbers-title">
                            Ташкил этилган кичик бизнес субеъктлари сони
                        </h5>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="numbers-box">
                        <div class="numbers-info">
                            <div class="numbers-img">
                                <img src="/front/img/small_news.png" alt="">
                            </div>
                            <div class="numbers-protsent">

                                <h6 class="protsent">
                                    <span class="counter-value" data-count="38.7">0</span>
                                    %
                                </h6>
                                <p class="protsent-desc">
                                    2021 йилнинг январ-март ойига нисбатан фоизи
                                </p>
                            </div>
                        </div>
                        <h5 class="numbers-title">
                            Ташкил этилган кичик бизнес субеъктлари сони
                        </h5>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="numbers-box">
                        <div class="numbers-info">
                            <div class="numbers-img">
                                <img src="/front/img/small_news.png" alt="">
                            </div>
                            <div class="numbers-protsent">

                                <h6 class="protsent">
                                    <span class="counter-value" data-count="38.7">0</span>
                                    %
                                </h6>
                                <p class="protsent-desc">
                                    2021 йилнинг январ-март ойига нисбатан фоизи
                                </p>
                            </div>
                        </div>
                        <h5 class="numbers-title">
                            Ташкил этилган кичик бизнес субеъктлари сони
                        </h5>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="numbers-box">
                        <div class="numbers-info">
                            <div class="numbers-img">
                                <img src="/front/img/small_news.png" alt="">
                            </div>
                            <div class="numbers-protsent">

                                <h6 class="protsent">
                                    <span class="counter-value" data-count="38.7">0</span>
                                    %
                                </h6>
                                <p class="protsent-desc">
                                    2021 йилнинг январ-март ойига нисбатан фоизи
                                </p>
                            </div>
                        </div>
                        <h5 class="numbers-title">
                            Ташкил этилган кичик бизнес субеъктлари сони
                        </h5>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="numbers-box">
                        <div class="numbers-info">
                            <div class="numbers-img">
                                <img src="/front/img/small_news.png" alt="">
                            </div>
                            <div class="numbers-protsent">

                                <h6 class="protsent">
                                    <span class="counter-value" data-count="38.7">0</span>
                                    %
                                </h6>
                                <p class="protsent-desc">
                                    2021 йилнинг январ-март ойига нисбатан фоизи
                                </p>
                            </div>
                        </div>
                        <h5 class="numbers-title">
                            Ташкил этилган кичик бизнес субеъктлари сони
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- statistic numbers section end -->

    <!-- media section start -->
    <section class="media">
        <div class="container">
            <h2 class="section-title">Mediateka</h2>
            <div class="media-image-list">
                <div>
                    <a href="#" class="media-box">
                        <img src="/front/img/small_news.png" alt="">
                    </a>
                </div>
                <div>
                    <a href="#" class="media-box">
                        <img src="/front/img/small_news.png" alt="">
                    </a>
                </div>
                <div>
                    <a href="#" class="media-box">
                        <img src="/front/img/small_news.png" alt="">
                    </a>
                </div>
                <div>
                    <a href="#" class="media-box">
                        <img src="/front/img/small_news.png" alt="">
                    </a>
                </div>
            </div>
            <div class="media-video-list">
                <div>
                    <a href="#" class="media-box">
                        <img src="/front/img/small_news.png" alt="">
                    </a>
                </div>
                <div>
                    <a href="#" class="media-box">
                        <img src="/front/img/small_news.png" alt="">
                    </a>
                </div>
                <div>
                    <a href="#" class="media-box">
                        <img src="/front/img/small_news.png" alt="">
                    </a>
                </div>
                <div>
                    <a href="#" class="media-box">
                        <img src="/front/img/small_news.png" alt="">
                    </a>
                </div>
            </div>
            <div class="all-btn-container mt-3">
                <a href="#" class="news-all-btn">Barcha videolar va rasmlar</a>
            </div>
        </div>
    </section>
    <!-- media section end -->

    <!-- links section start -->
    <section class="links">
        <div class="container">
            <h2 class="section-title">@lang("useful_links.foydali_havola")</h2>
            <div class="links-table">
                <div class="fast-connect-box">
                    <a href="https://meningfikrim.uz/uz" class="box">
                        <div class="fast-connect-img">
                            <img src="/img/fast_connect3.png" alt="">
                        </div>
                        <span class="fast-connect-text">@lang("useful_links.Jamoaviy murojaatlar Portali")</span>
                    </a>
                </div>
                <div class="fast-connect-box">
                    <a href="https://president.uz/ru" class="box">
                        <div class="fast-connect-img">
                            <img src="img/fast_connect3.png" alt="">
                        </div>
                        <span class="fast-connect-text">@lang("useful_links.prezident")</span>
                    </a>
                </div>
                <div class="fast-connect-box">
                    <a href="https://parliament.gov.uz/ru/" class="box">
                        <div class="fast-connect-img">
                            <img src="img/fast_connect3.png" alt="">
                        </div>
                        <span class="fast-connect-text">
                            @lang("useful_links.senat")
                            </span>
                    </a>
                </div>
                <div class="fast-connect-box">
                    <a href="https://my.gov.uz/ru" class="box">
                        <div class="fast-connect-img">
                            <img src="img/fast_connect3.png" alt="">
                        </div>
                        <span class="fast-connect-text">
                            @lang("useful_links.Yagona interaktiv davlat xizmatlari portali")
                        </span>
                    </a>
                </div>
                <div class="fast-connect-box">
                    <a href="https://mfa.uz/ru" class="box">
                        <div class="fast-connect-img">
                            <img src="img/fast_connect3.png" alt="">
                        </div>
                        <span class="fast-connect-text">
                            @lang("useful_links.milliy")
                        </span>
                    </a>
                </div>
                <div class="fast-connect-box">
                    <a href="https://huquqiyportal.uz/" class="box">
                        <div class="fast-connect-img">
                            <img src="img/fast_connect3.png" alt="">
                        </div>
                        <span class="fast-connect-text">@lang("useful_links.O'zbekiston Respublikasi Tashqi ishlar Vazirligi")</span>
                    </a>
                </div>
                <div class="fast-connect-box">
                    <a href="https://parliament.gov.uz/ru/" class="box">
                        <div class="fast-connect-img">
                            <img src="img/fast_connect3.png" alt="">
                        </div>
                        <span class="fast-connect-text">
                           @lang("useful_links.qonunchilik")
                        </span>
                    </a>
                </div>
                <div class="fast-connect-box">
                    <a href="https://gov.uz/uz" class="box">
                        <div class="fast-connect-img">
                            <img src="img/fast_connect3.png" alt="">
                        </div>
                        <span class="fast-connect-text">
                           @lang("useful_links.hukumat")
                        </span>
                    </a>
                </div>
                <div class="fast-connect-box">
                    <a href="https://president.uz/uz" class="box">
                        <div class="fast-connect-img">
                            <img src="img/fast_connect3.png" alt="">
                        </div>
                        <span class="fast-connect-text">@lang("useful_links.matbuot")</span>
                    </a>
                </div>
            </div>
            <h2 class="section-title">Murojaatlar statistikasi</h2>
            <div class="row appeal-statistic">
                <div class="col-12 col-sm-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="progress-box">
                        <div class="progress-part">
                            <p>Uploading Resume</p>
                            <div>
                                <span class="progress-part-count" data-count="81">0</span>
                                %
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-label="Basic example"
                                style="width: 81%" aria-valuenow="81" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="progress-box">
                        <div class="progress-part">
                            <p>Uploading Resume</p>
                            <div>
                                <span class="progress-part-count" data-count="81">0</span>
                                %
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-label="Basic example"
                                style="width: 81%" aria-valuenow="81" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="progress-box">
                        <div class="progress-part">
                            <p>Uploading Resume</p>
                            <div>
                                <span class="progress-part-count" data-count="81">0</span>
                                %
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-label="Basic example"
                                style="width: 81%" aria-valuenow="81" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 mb-4 mb-lg-0">
                    <div class="progress-box">
                        <div class="progress-part">
                            <p>Uploading Resume</p>
                            <div>
                                <span class="progress-part-count" data-count="81">0</span>
                                %
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-label="Basic example"
                                style="width: 81%" aria-valuenow="81" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- links section end -->
@endsection
