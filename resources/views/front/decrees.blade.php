@extends('layouts.main')

@section('content')
<div class="container">
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('main') }}">@lang('menu.Bosh sahifa')</a></li>
            <li class="breadcrumb-item"><a href="#">@lang('menu.Mahalliy Kengash')</a></li>
            <li class="breadcrumb-item active" aria-current="page">@lang('menu.Qabul qilingan qarorlar')</li>
        </ol>
    </nav>
    <h2 class="section-title mb-30">
        @lang('menu.Qabul qilingan qarorlar')
    </h2>

    <ol class="rules">
        @foreach ($decrees as $decree)
            <li><a href="/{{ $decree->file }}">{{ $decree->title }}</a></li>
        @endforeach
    </ol>

     @include('layouts.components.copy')

</div>
@endsection


