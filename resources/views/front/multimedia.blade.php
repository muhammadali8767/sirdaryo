@extends('layouts.main')

@section('content')

    <div class="news">
        <h2>@lang('menu.multimedia')</h2>
        <div class="news__category">
            <a href="{{ route('main') }}">@lang('menu.main')</a>
            <span>/</span>
            <a href="{{ route('multimedia') }}">@lang('menu.multimedia')</a>
        </div>

    </div>
    <div class="news__items news__inner">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-sm-6 col-lg-8 news__inner_one-col">
                    <h5 class="news__inner-title">Фотогалерея </h5>
                    <div class="row">
                        @foreach ($photos as $photo)
                        <div class="col-6 col-md-6 col-lg-4 mb-3 ">
                            <img src="{{ $photo->media }}" alt="{{ $photo->title }}" title="{{ $photo->title }}" class="img-fluid">
                        </div>
                        @endforeach
                    </div>
                    <h5 class="news__inner-title">Видеогалерея </h5>
                    <div class="row">
                        @foreach ($videos as $video)
                        <div class="col-6 col-md-6 col-lg-4 mb-3 ">
                            <div class="video__item">
                                <video src="{{ $video->media }}" class="img-fluid" title="{{ $video->title }}" controls></video>
                                {{-- <div class="video__hover">
                                    <i class="fas fa-play-circle"></i>
                                </div> --}}
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    @include('layouts.components.right_sidebar')
                </div>
            </div>
        </div>
    </div>


@endsection
