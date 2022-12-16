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
        Senat a'zolari
    </h2>

    <table class="info-tabel">
        <thead>
            <tr>
                <th>№</th>
                <th>Familiyasi ismi va otasining ismi</th>
                <th>Ish joyi va lavozimi</th>
                <th>Partiyasi</th>
            </tr>
        </thead>
        @foreach ($senators as $key => $senator)
        <tr>
            <td>{{ $key }}</td>
            <td>{{ $senator->fullname }}</td>
            <td>{{ $senator->job_and_position }}</td>
            <td>{{ $senator->party }}</td>
        </tr>
        @endforeach
    </table>

    @include('layouts.components.copy')

</div>
@endsection
