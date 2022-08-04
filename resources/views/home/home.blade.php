@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <br>
                    <h1>Categories</h1>
                    @foreach ($categories as $category)
                        <a href="{{ route('category', $category->slug) }}">
                            {{ route('category', $category->slug) }}
                        </a><br>
                    @endforeach
                    <br>
                    <h1>Posts</h1>
                    @foreach ($posts as $post)
                        <a href="{{ route('category_post', [$post->category->slug, $post->slug]) }}">
                            {{ route('category_post', [$post->category->slug, $post->slug]) }}
                        </a>
                    @endforeach
                    <br>
                    <h1>Pages</h1>
                    @foreach ($pages as $page)
                        <a href="{{ route('page', $page->slug) }}">
                            {{ route('page', $page->slug) }}
                        </a><br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
