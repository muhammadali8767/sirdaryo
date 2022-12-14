@extends('layouts.admin_layout')

@section('title', 'Добавить в цифрах')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить в цифрах</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('homeAdmin') }}">Главная</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('inNumbers.index') }}">В цифрах</a></li>
                        <li class="breadcrumb-item active">Добавить в цифрах</li>
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
                        <form action="{{ route('inNumbers.store') }}" method="POST" enctype="multipart/form-data">
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
                                                <label for="exampleInputEmail1">Sarlavha</label>
                                                <input type="text" name="title_uz"
                                                    class="form-control @error('title_uz') is-invalid @enderror"
                                                    required value="{{ old('title_uz') }}">
                                                @error('title_uz')
                                                    <p class="text-danger small">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Qo'shimcha sarlavha</label>
                                                <input type="text" name="sub_title_uz"
                                                    class="form-control @error('sub_title_uz') is-invalid @enderror"
                                                    required value="{{ old('sub_title_uz') }}">
                                                @error('sub_title_uz')
                                                    <p class="text-danger small">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Qiymati</label>
                                                <input type="text" name="value_uz"
                                                    class="form-control @error('value_uz') is-invalid @enderror"
                                                    required value="{{ old('value_uz') }}">
                                                @error('value_uz')
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
                                                    value="{{ old('title_ru') }}">
                                                @error('title_ru')
                                                    <p class="text-danger small">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Подзаголовок</label>
                                                <input type="text" name="sub_title_ru"
                                                    class="form-control @error('sub_title_ru') is-invalid @enderror"
                                                    value="{{ old('sub_title_ru') }}">
                                                @error('sub_title_ru')
                                                    <p class="text-danger small">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Значение</label>
                                                <input type="text" name="value_ru"
                                                    class="form-control @error('value_ru') is-invalid @enderror"
                                                    value="{{ old('value_ru') }}">
                                                @error('value_ru')
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
                                                    value="{{ old('title_en') }}">
                                                @error('title_en')
                                                    <p class="text-danger small">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Sub title</label>
                                                <input type="text" name="sub_title_en"
                                                    class="form-control @error('sub_title_en') is-invalid @enderror"
                                                    value="{{ old('sub_title_en') }}">
                                                @error('sub_title_en')
                                                    <p class="text-danger small">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Value</label>
                                                <input type="text" name="value_en"
                                                    class="form-control @error('value_en') is-invalid @enderror"
                                                    value="{{ old('value_en') }}">
                                                @error('value_en')
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
                                                <label for="exampleInputEmail1">Активно</label>
                                                <input type="checkbox" name="is_active"
                                                    class="form-control @error('is_active') is-invalid @enderror"
                                                    @if(old('is_active')) checked @endif value="1">
                                                @error('is_active')
                                                    <p class="text-danger small">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div class="form-group">
                                                <label for="feature_image">Изображение статьи</label>
                                                <input type="text" name="image"
                                                    class="form-control @error('password') is-invalid @enderror" id="feature_image"
                                                    name="feature_image" value="{{ old('image') }}" readonly>
                                                <div class="invalid-feedback">
                                                    Please fill a valid data.
                                                </div>
                                                @error('image')
                                                    <p class="text-danger small">{{ $message }}</p>
                                                @enderror
                                                <a href="" class="popup_selector" data-inputid="feature_image">Выбрать изображение</a>
                                            </div>
                                            <img src="{{ old('image') }}" alt="" class="image-uploaded" style="display: block; width: 300px">
                                        </div>

                                    </div>

                                </div>
                            </div>
                                <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Добавить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
