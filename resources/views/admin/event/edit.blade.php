@extends('layouts.admin_layout')

@section('title', 'Редактирование событии')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактирование событии: {{ $event->id }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('homeAdmin') }}">Главная</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('event.index') }}">События</a></li>
                        <li class="breadcrumb-item active">Редактирование событии</li>
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
                    <form action="{{ route('event.update', $event->id) }}" method="POST">
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
                                            <label for="exampleInputEmail1">Sarlavha</label>
                                            <input type="text" name="title_uz"
                                                class="form-control @error('title_uz') is-invalid @enderror"
                                                required value="{{ $event->title_uz }}">
                                            @error('title_uz')
                                                <p class="text-danger small">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel"
                                        aria-labelledby="custom-tabs-four-profile-tab">

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Заголовок</label>
                                            <input type="text" name="title_ru"
                                                class="form-control @error('title_ru') is-invalid @enderror"
                                                value="{{ $event->title_ru }}">
                                            @error('title_ru')
                                                <p class="text-danger small">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel"
                                        aria-labelledby="custom-tabs-four-messages-tab">

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Title</label>
                                            <input type="text" name="title_en"
                                                class="form-control @error('title_en') is-invalid @enderror"
                                                value="{{ $event->title_en }}">
                                            @error('title_en')
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
                                    <div class="col-1">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Время событии</label>
                                            <input type="datetime-local" name="event_time"
                                                class="form-control @error('event_time') is-invalid @enderror"
                                                required value="{{ $event->event_time }}">
                                            @error('event_time')
                                                <p class="text-danger small">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-1">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Активно</label>
                                            <input type="checkbox" name="is_active"
                                                class="form-control @error('is_active') is-invalid @enderror"
                                                @if($event->is_active) checked @endif value="1">
                                            @error('is_active')
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
