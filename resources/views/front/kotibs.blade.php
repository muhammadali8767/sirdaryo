@extends('layouts.main')
@section('content')
<div class="container">
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('main') }}">@lang('menu.Bosh sahifa')</a></li>
            <li class="breadcrumb-item"><a href="#">@lang('menu.Mahalliy Kengash')</a></li>
            <li class="breadcrumb-item active" aria-current="page">@lang('menu.Kotibiyat mudirlari')</li>
        </ol>
    </nav>
    <h2 class="section-title mb-30">
        @lang('menu.Kotibiyat mudirlari')
    </h2>
    <h4 class=" mb-30 text-center">@lang('front.Xalq deputatlari')</h4>

    <table class="info-tabel">
        <thead>
            <tr>
                <th>№</th>
                <th>@lang('front.fio')</th>
                <th>@lang('front.Hududi')</th>

            </tr>
        </thead>
        @php
            $i = 1;
        @endphp
        @foreach ($kotibs as $kotib)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $kotib->fullname }}</td>
            <td>{{ $kotib->okrug }}</td>
        </tr>

        @endforeach

    </table>

    @include('layouts.components.copy')
</div>
@endsection
