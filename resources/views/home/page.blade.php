@extends('layouts.main')

@section('content')

<div class="col-12 order-1 order-lg-0">
    <div class="row mb-3">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ route('main') }}" class="breadcrumb-link">@lang('menu.Bosh sahifa')</a></li>
                  <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">{{ $page->title }}</a></li>
                </ol>
              </nav>
        </div>
        <div class="col-12 col-lg-8">
            <h2 class="section-title mb-1">
                {{ $page->title }}
            </h2>
        </div>
        <div class="col-4 d-none d-lg-block">
            <div class="d-flex align-items-center justify-content-end sort news-card-time">
                <small class=" me-4">
                    <i class="fas fa-calendar me-1"></i>
                    {{ $page->created_at->format('d/m/Y - H:i') }}
                </small>
                <span>
                    <i class="fas fa-eye me-1"></i>
                    {{ $page->seen }}
                </span>
            </div>
        </div>
    </div>
    <div class="row bg-white ms-1 py-4 rounded-3">
        <div class="col-12">
            <p>{!! $page->text !!}</p>
        </div>
    </div>
</div>


@include('layouts.components.copy')
@endsection
