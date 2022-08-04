@extends('layouts.main')

@section('content')

    @if ($page->type == 1)
        <div class="news">
            <h2>{{ $page->title }}</h2>
            <div class="news__category">
                <a href="{{ route('main') }}">@lang('menu.main')</a>
                <span>/</span>
                <a href="#">{{ $page->title }}</a>
            </div>
        </div>
        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4">
                        @include('layouts.components.left_sidebar')
                    </div>
                    <div class="col-12 col-md-8">
                        <p>{!! $page->text !!}</p>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="container-fluid header__bg d-flex justify-content-center p-0">
            <div class="about__inner">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="about__inner-item">
                                <h2>{{ $page->title }}</h2>
                                <p>{{ $page->sub_title }}</p>
                                <img class="w-100" src="{{ $page->image }}" alt="png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="container-fluid p-0 bg-white">
            <div class="container about__text">
                <p>{!! $page->text !!}</p>
            </div>
        </section>
    @endif



@endsection
