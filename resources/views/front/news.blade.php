@extends('layouts.main')

@section('content')

<section class="news-page">
    <div class="container">
        <h2 class="section-title">@if (isset($category)) {{ $category->title }} @else @lang('menu.Yangiliklar') @endif</h2>
        <div class="row news-page-container">
            @foreach ($posts as $post)
                <div class="col-12 col-md-6 col-xl-4 news-page-box">
                    <div class="news-img mb-3">
                        <img src="{{ $post->img }}" class="" alt="Images">
                    </div>
                    <div class="news-info-box">
                        <div class="d-flex align-items-center mb-3">
                            <div class="date-view">
                                <i class="fas fa-calendar"></i>
                                <span class="hours">{{ $post->created_at->format('H:i') }}</span> / <span class="date">{{ $post->created_at->format('d.m.Y') }}</span>
                            </div>
                            <div class="date-view">
                                <i class="fas fa-eye"></i>
                                <span class="view-numbers">
                                    {{ $post->seen }}
                                </span>
                            </div>
                        </div>
                        <a href="{{ route('post', $post->slug) }}" class="news-short-title marked-links">
                            {{ $post->title }}
                        </a>
                        <p class="news-description">
                            {{ $post->short }}
                        </p>
                        <div class="news-tags">
                            <a href="#" class="tags">
                                {{ $post->category->title }}
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="news-pagination">
            {{ $posts->links('pagination::bootstrap-4') }}
        </div>
    </div>
    </div>
</section>
@endsection

