@extends('layouts.main')

@section('content')
<div class="container">
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('main') }}">@lang('menu.Bosh sahifa')</a></li>
            <li class="breadcrumb-item active" aria-current="page">@lang('menu.Ochiq malumotlar')</li>
        </ol>
    </nav>
    <h2 class="section-title mb-30">
        @lang('menu.Ochiq malumotlar')
    </h2>

    <table class="info-tabel">
        @foreach ($openDatas as $openData)
        <tr>
            <td>{{ $openData->title }}</td>
        </tr>

        @endforeach
    </table>


    @include('layouts.components.copy')
</div>
@endsection


