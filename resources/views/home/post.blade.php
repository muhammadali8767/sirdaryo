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
        <img src="{{ $post->img }}" alt="No image" style="width: 100%">
        <hr>
        {!! $post->text !!}

        @include('layouts.components.copy')
    </div>
    </div>
</section>

@endsection
