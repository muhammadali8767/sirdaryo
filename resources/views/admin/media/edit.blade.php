@extends('layouts.admin_layout')

@section('title', 'Редактирование медиа')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактирование медиа: {{ $media->title }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('homeAdmin') }}">Главная</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('medias.index') }}">медиа</a></li>
                        <li class="breadcrumb-item active">Редактирование медиа</li>
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
                    <div class="card card-primary">
                        <!-- form start -->
                        <form action="{{ route('medias.update', $media->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Заголовок</label>
                                    <input type="text" name="title" class="form-control"
                                        value="{{ old('title', $media->title) }}" required>
                                </div>
                                <div class="form-group">
                                    <label>Тип</label>
                                    <select class="form-control" disabled>
                                        <option value="photo" @if ($media->type == 'photo') selected @endif>Фото</option>
                                        <option value="video" @if ($media->type == 'video') selected @endif>Видео</option>
                                    </select>
                                </div>
                                <input type="hidden" name="type" value="{{ $media->type }}">
                                <div class="form-group">
                                    <label>Медиа</label>
                                    @if ($media->type == 'photo')
                                        <img src="{{ old('media', $media->media) }} class="img-uploaded" style="display: block; width: 300px">
                                    @else
                                        <video src="{{ old('media', $media->media) }}"
                                            style="display: block; width: 300px" controls></video>
                                    @endif
                                    <br>
                                    <input type="text" name="media"
                                        class="form-control
                                        @error('password') is-invalid @enderror"
                                        id="feature_image" name="feature_image" value="{{ old('media', $media->media) }}"
                                        readonly>

                                    <div class="invalid-feedback">
                                        Please fill a valid data.
                                    </div>

                                    @error('media')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <a href="" class="popup_selector" data-inputid="feature_image">Выбрать изображение</a>
                                </div>

                            </div>
                            <!-- /.card-body -->

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
