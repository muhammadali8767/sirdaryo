@extends('layouts.main')

@section('content')
    <div class="news">
        <h2>@lang('menu.news')</h2>
        <div class="news__category">
            <a href="{{ route('main') }}">@lang('menu.main')</a>
            <span>/</span>
            <a href="{{ route('news') }}">@lang('menu.news')</a>
            <span>/</span>
            <a href="#">{{ $post->title }}</a>
        </div>
    </div>

    <div class="news__items news__inner">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-sm-6 col-lg-8 news__inner_one-col">
                    <img src="{{ $post->img }}" alt="" class="img-fluid rounded mb-2 mb-md-3 mb-lg-5 ">
                    <p>{!! $post->text !!}</p>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    @include('layouts.components.right_sidebar')
                </div>
            </div>
        </div>
    </div>
@endsection
