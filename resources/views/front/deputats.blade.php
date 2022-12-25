@extends('layouts.main')
@section('content')
<div class="container">
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Mahalliy kengash</a></li>
            <li class="breadcrumb-item active" aria-current="page">Senat a'zolari</li>
        </ol>
    </nav>
    <h2 class="section-title mb-30">
        Deputatlar tarkibi
    </h2>
    <h4 class="text-center mb-30">
        Xalq deputatlari viloyat, tuman (shahar) Kengashi deputatlari</h4>
    <table class="info-tabel">
        <thead>
            <tr>
                <th>№</th>
                <th>@lang('front.Okrug nomi')</th>
                <th>@lang('front.fio')</th>
                <th>@lang('front.Ish joyi va lavozimi')</th>
                <th>@lang('front.Partiyasi')</th>
            </tr>
        </thead>
        @php
            $i = 1;
        @endphp
        @foreach ($deputats as $deputat)

        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $deputat->okrug }}</td>
            <td>{{ $deputat->fullname }}</td>
            <td>{{ $deputat->job_and_position }}</td>
            <td>{{ $deputat->party }}</td>
        </tr>
        @endforeach
    </table>

    @include('layouts.components.copy')

</div>

@endsection
