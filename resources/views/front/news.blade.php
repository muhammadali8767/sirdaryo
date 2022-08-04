@extends('layouts.main')

@section('content')

    <div class="news">
        <h2>@lang('menu.news')</h2>
        <div class="news__category">
            <a href="{{ route('main') }}">@lang('menu.main')</a>
            <span>/</span>
            <a href="{{ route('news') }}">@lang('menu.news')</a>
        </div>

    </div>
    <div class="news__items">
        <div class="container">
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-12 col-sm-6 col-lg-4 my-5">
                        <img class="img-fluid" src="{{ $post->img }}">
                        <span class="type">{{ $post->category->title }}</span>
                        <h4 class="news__title">{{ $post->title }}</h4>
                        <a class="news__text" href="{{ route('category_post', [$post->category->slug, $post->slug]) }}">{{ $post->short }}</a>
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
        <div class="row justify-content-center align-items-center">
            {{ $posts->links() }}
        </div>
    </div>


@endsection
