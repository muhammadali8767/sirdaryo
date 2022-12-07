@extends('layouts.admin_layout')

@section('title', 'Редактирование порядка приема граждан')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактирование порядка приема граждан: {{ $reception->id }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('homeAdmin') }}">Главная</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('reception.index') }}">Порядок приема граждан</a></li>
                        <li class="breadcrumb-item active">Редактирование порядка приема граждан</li>
                    </ol>
                </div>

            </div><!-- /.row -->
            @include('layouts.components.admin.message')
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <!-- form start -->
                    <form action="{{ route('reception.update', $reception->id) }}" method="POST">
                        @csrf
                        @method('PUT')
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
                                            <label for="exampleInputEmail1">Ish joyi va lavozimi</label>
                                            <input type="text" name="job_title_uz"
                                                class="form-control @error('job_title_uz') is-invalid @enderror"
                                                required value="{{ $reception->job_title_uz }}">
                                            @error('job_title_uz')
                                                <p class="text-danger small">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">F.I.SH</label>
                                            <input type="text" name="fullname_uz"
                                                class="form-control @error('fullname_uz') is-invalid @enderror"
                                                required value="{{ $reception->fullname_uz }}">
                                            @error('fullname_uz')
                                                <p class="text-danger small">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel"
                                        aria-labelledby="custom-tabs-four-profile-tab">

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Рабочее место и должность</label>
                                            <input type="text" name="job_title_ru"
                                                class="form-control @error('job_title_ru') is-invalid @enderror"
                                                value="{{ $reception->job_title_ru }}">
                                            @error('job_title_ru')
                                                <p class="text-danger small">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Ф.И.О.</label>
                                            <input type="text" name="fullname_ru"
                                                class="form-control @error('fullname_ru') is-invalid @enderror"
                                                value="{{ $reception->fullname_ru }}">
                                            @error('fullname_ru')
                                                <p class="text-danger small">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel"
                                        aria-labelledby="custom-tabs-four-messages-tab">

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Workplace and position</label>
                                            <input type="text" name="job_title_en"
                                                class="form-control @error('job_title_en') is-invalid @enderror"
                                                value="{{ $reception->job_title_en }}">
                                            @error('job_title_en')
                                                <p class="text-danger small">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Full name</label>
                                            <input type="text" name="fullname_en"
                                                class="form-control @error('fullname_en') is-invalid @enderror"
                                                value="{{ $reception->fullname_en }}">
                                            @error('fullname_en')
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
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Приемные дни</label>
                                            <input type="text" name="reception_day"
                                                class="form-control @error('reception_day') is-invalid @enderror"
                                                required value="{{ $reception->reception_day }}">
                                            @error('reception_day')
                                                <p class="text-danger small">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Время приема</label>
                                            <input type="text" name="reception_time"
                                                class="form-control @error('reception_time') is-invalid @enderror"
                                                required value="{{ $reception->reception_time }}">
                                            @error('reception_time')
                                                <p class="text-danger small">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Обновить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
