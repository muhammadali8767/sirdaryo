@extends('layouts.main')
@section('content')
<div class="container">
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('main') }}">@lang('menu.Bosh sahifa')</a></li>
            <li class="breadcrumb-item"><a href="#">@lang('menu.Hokimiyat haqida')</a></li>
            <li class="breadcrumb-item active" aria-current="page">@lang('menu.Rahbariyat')</li>
        </ol>
    </nav>
    <h2 class="section-title mb-30">
        @lang('menu.Rahbariyat')
    </h2>
    @foreach ($directors as $director)

    <div class="leader">
        <div class="row">
            <div class="col-12 col-lg-3 col-xl-4 mb-3 mb-lg-0">
                <div class="leader-img">
                    <img src="{{ $director->image }}" alt="Leader image">
                </div>
            </div>
            <div class="col-12 col-lg-9 col-xl-8">
                <p class="leader-position">{{ $director->job_title }}</p>
                <h4 class="leader-name">{{ $director->fullname }}</h4>
                <div class="row align-items-center mb-50">
                    <div class="col-12 col-md-6">
                        <div class="header__top_text mb-4">
                            <i class="fas fa-clock header__top_text-icon"></i>
                            <p class="header__top_text-text">
                                {{ $director->reception_times }}
                                {{-- Dushanba - Juma, 9:00 - 18:00,
                                Tushlik 13:00-14:00 --}}
                            </p>
                        </div>
                        <div class="header__top_connect align-items-start">
                            <a href="tel: +998672254090" class="tel_nomer">
                                <i class="fas fa-phone-alt tel_nomer-icon"></i>
                                {{ $director->phone }}
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mt-4 mt-md-0">
                        <div class="messenger__icons justify-content-md-end">
                            <a href="{{ $director->fb }}">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="{{ $director->tw }}">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="{{ $director->ig }}">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="{{ $director->in }}">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="{{ $director->yt }}">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <nav>
                    <div class="nav leader-task-btns nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                            data-bs-target="#home-tab-pane" role="tab"
                            aria-controls="home-tab-pane"
                            aria-selected="true">@lang('front.Biografiya')</button>
                        <button class="nav-link" id="home-tab" data-bs-toggle="tab"
                            data-bs-target="#profile-tab-pane" role="tab"
                            aria-controls="home-tab-pane"
                            aria-selected="true">@lang('front.Majburiyatlar')</button>
                        <button class="nav-link" id="home-tab" data-bs-toggle="tab"
                            data-bs-target="#contact-tab-pane" role="tab"
                            aria-controls="home-tab-pane" aria-selected="true">@lang('front.Faoliyat')</button>
                    </div>
                </nav>
            </div>
        </div>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show leader-task active" id="home-tab-pane"
                role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                <h4 class="leader-taskname">@lang('front.Biografiya')</h4>
                {!! $director->biography !!}

            </div>
            <div class="tab-pane fade leader-task" id="profile-tab-pane" role="tabpanel"
                aria-labelledby="profile-tab" tabindex="0">
                <h4 class="leader-taskname">@lang('front.Majburiyatlar')</h4>
                {!! $director->obligation !!}

            </div>
            <div class="tab-pane fade leader-task" id="contact-tab-pane" role="tabpanel"
                aria-labelledby="profile-tab" tabindex="0">
                <h4 class="leader-taskname">@lang('front.Faoliyat')</h4>
                {!! $director->activity !!}
            </div>
        </div>
    </div>
    @endforeach

    @include('layouts.components.copy')


</div>
@endsection
