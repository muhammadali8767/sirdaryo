@extends('layouts.main')
@section('content')
<div class="container">
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('main') }}">@lang('menu.Bosh sahifa')</a></li>
            <li class="breadcrumb-item active" aria-current="page">@lang('menu.Fuqarolarni qabul qilish tartibi')</li>
        </ol>
    </nav>
    <h2 class="section-title mb-30">
        @lang('menu.Fuqarolarni qabul qilish tartibi')
    </h2>

    <div class="decree-links">
        <a href="#">
            «Jismoniy va yuridik shaxslarning murojaatlari to‘g‘risida»gi O‘zbekiston
            Respublikasi
            qonuniga o‘zgartish va qo‘shimchalar kiritish haqida»gi O‘zbekiston Respublikasi
            Qonuni
        </a>
        <a href="#">
            «Jismoniy va yuridik shaxslarning murojaatlari to‘g‘risid»gi O‘zbekiston
            Respublikasining Qonuni
        </a>
    </div>

    <h4 class="structura-title">Viloyat hokimligi boshqaruv apparati to‘g‘risida
        NIZOM</h4>

        @foreach ($receptions as $reception)
            <table class="info-tabel">
                <thead>
                    <tr>
                        <th colspan="2">{{ $reception->fullname }}</th>
                    </tr>
                </thead>
                <tr>
                    <td>@lang('front.Lavozimi')</td>
                    <td>{{ $reception->job_title }}</td>
                </tr>
                <tr>
                    <td>@lang('front.Qabul kunlari')</td>
                    <td>{{ $reception->reception_day }}</td>
                </tr>
                <tr>
                    <td>@lang('front.Qabul vaqtlari')</td>
                    <td>{{ $reception->reception_time }}</td>
                </tr>
            </table>
        @endforeach

     @include('layouts.components.copy')
</div>
@endsection
