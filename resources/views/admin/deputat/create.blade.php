@extends('layouts.admin_layout')

@section('title', 'Добавить сенатора')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить сенатора</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('homeAdmin') }}">Главная</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('deputat.index') }}">Директоры</a></li>
                        <li class="breadcrumb-item active">Добавить сенатора</li>
                    </ol>
                </div>

            </div><!-- /.row -->
            @include('layouts.components.admin.message')
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <form action="{{ route('deputat.store') }}" method="POST" class="needs-validation" novalidate>
                        @csrf
                        <div class="card card-primary card-outline card-outline-tabs">
                            <div class="card-header p-0 border-bottom-0">
                                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill"
                                            href="#custom-tabs-four-home" role="tab"
                                            aria-controls="custom-tabs-four-home" aria-selected="true">Ozbekcha</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill"
                                            href="#custom-tabs-four-profile" role="tab"
                                            aria-controls="custom-tabs-four-profile" aria-selected="false">Русский</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill"
                                            href="#custom-tabs-four-messages" role="tab"
                                            aria-controls="custom-tabs-four-messages" aria-selected="false">English</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="custom-tabs-four-tabContent">
                                    <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel"
                                        aria-labelledby="custom-tabs-four-home-tab">

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Okrug nomi</label>
                                            <input type="text" name="okrug_uz"
                                                class="form-control @error('okrug_uz') is-invalid @enderror"
                                                required value="{{ old('okrug_uz') }}">
                                            @error('okrug_uz')
                                                <p class="text-danger small">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">F.I.SH</label>
                                            <input type="text" name="fullname_uz"
                                                class="form-control @error('fullname_uz') is-invalid @enderror"
                                                required value="{{ old('fullname_uz') }}">
                                            @error('fullname_uz')
                                                <p class="text-danger small">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Ish joyi va lavozimi</label>
                                            <input type="text" name="job_and_position_uz"
                                                class="form-control @error('job_and_position_uz') is-invalid @enderror"
                                                required value="{{ old('job_and_position_uz') }}">
                                            @error('job_and_position_uz')
                                                <p class="text-danger small">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel"
                                        aria-labelledby="custom-tabs-four-profile-tab">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Название округа</label>
                                            <input type="text" name="okrug_ru"
                                                class="form-control @error('okrug_ru') is-invalid @enderror"
                                                value="{{ old('okrug_ru') }}">
                                            @error('okrug_ru')
                                                <p class="text-danger small">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Ф.И.О.</label>
                                            <input type="text" name="fullname_ru"
                                                class="form-control @error('fullname_ru') is-invalid @enderror"
                                                value="{{ old('fullname_ru') }}">
                                            @error('fullname_ru')
                                                <p class="text-danger small">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Рабочее место и должность</label>
                                            <input type="text" name="job_and_position_ru"
                                                class="form-control @error('job_and_position_ru') is-invalid @enderror"
                                                value="{{ old('job_and_position_ru') }}">
                                            @error('job_and_position_ru')
                                                <p class="text-danger small">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel"
                                        aria-labelledby="custom-tabs-four-messages-tab">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">County name</label>
                                            <input type="text" name="okrug_en"
                                                class="form-control @error('okrug_en') is-invalid @enderror"
                                                value="{{ old('okrug_en') }}">
                                            @error('okrug_en')
                                                <p class="text-danger small">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Full name</label>
                                            <input type="text" name="fullname_en"
                                                class="form-control @error('fullname_en') is-invalid @enderror"
                                                value="{{ old('fullname_en') }}">
                                            @error('fullname_en')
                                                <p class="text-danger small">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Workplace and position</label>
                                            <input type="text" name="job_and_position_en"
                                                class="form-control @error('job_and_position_en') is-invalid @enderror"
                                                value="{{ old('job_and_position_en') }}">
                                            @error('job_and_position_en')
                                                <p class="text-danger small">{{ $message }}</p>
                                            @enderror
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <hr>
                            <div class="container-fluid">
                                <h2>Дополнителные</h2>
                                <div class="row">
                                    <div class="col-12">

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Партия</label>
                                            <input type="text" name="party"
                                                class="form-control @error('party') is-invalid @enderror"
                                                required value="{{ old('party') }}">
                                            @error('party')
                                                <p class="text-danger small">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Добавить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
