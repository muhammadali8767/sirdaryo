@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <h1>Posts of category {{$posts->first()->category->title}}</h1>
        <div class="col-md-12">
            @foreach ($posts as $post)
                <div class="card m-1">
                    <div class="card-header">
                        <a href="{{ route('category_post', [$post->category->slug, $post->slug]) }}">
                            {{ $post->title }}
                        </a>
                    </div>

                    <div class="card-body">

                        {!! $post->short !!}
                    </div>
                </div>

            @endforeach
        </div>
    </div>
</div>
@endsection
