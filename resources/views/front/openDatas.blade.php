@extends('layouts.main')

@section('content')
<div class="container">
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
    <div class="copy-elements mb-0">
        <div class="date-view order-0">
            {{--  <i class="fas fa-calendar"></i>
            <p>
                <span class="hours">00:00</span> / <span class="date">25.04.2022</span>
            </p>  --}}
        </div>
        <button class="copy-button order-2 order-sm-1">
            <i class="fal fa-clone"></i>
            Nusxa olish
        </button>
        <div class="date-view order-1 order-sm-2">
            {{--  <i class="fas fa-eye"></i>
            <p>
                <span class="view-numbers">4918</span>
            </p>  --}}
        </div>
    </div>
</div>
@endsection


