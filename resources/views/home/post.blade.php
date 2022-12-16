@extends('layouts.main')

@section('content')

<section class="news-selected-page">
    <div class="container">
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('main') }}" class="breadcrumb-link">@lang('menu.Bosh sahifa')</a></li>
                <li class="breadcrumb-item"><a href="{{ route('news') }}" class="breadcrumb-link">@lang('menu.Yangiliklar')</a></li>
                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">{{ $post->title }}</a></li>
            </ol>
        </nav>
        <h2 class="section-title">{{ $post->title }}</h2>
        <div class="row">
            <div class="col-10 offset-1">
                <img src="{{ $post->img }}" alt="" width="100%">
            </div>
        </div>
        <br>
        {!! $post->text !!}
        <div class="copy-elements">
            <div class="date-view order-0">
                <i class="fas fa-calendar"></i>
                <p>
                    <span class="hours">{{ $post->created_at->format('H:i') }}</span> / <span class="date">{{ $post->created_at->format('d.m.Y') }}</span>
                </p>
            </div>
            <button class="copy-button order-2 order-sm-1">
                <i class="fal fa-clone"></i>
                @lang('front.Nusxa olish')
            </button>
            <div class="date-view order-1 order-sm-2">
                <i class="fas fa-eye"></i>
                <p>
                    <span class="view-numbers">{{ $post->seen }}</span>
                </p>
            </div>
        </div>
    </div>
    </div>
</section>

@endsection
