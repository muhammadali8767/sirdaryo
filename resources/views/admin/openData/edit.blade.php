@extends('layouts.admin_layout')

@section('title', 'Редактирование категории')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактирование категории: {{ $openData->title }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('homeAdmin') }}">Главная</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('openData.index') }}">Категории</a></li>
                        <li class="breadcrumb-item active">Редактирование категорию</li>
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
                        <form action="{{ route('openData.update', $openData->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nomi O'zbekcha</label>
                                    <input type="text" value="{{ $openData->title_uz }}" name="title_uz" class="form-control" id="exampleInputEmail1" placeholder="Введите название" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Название Русский</label>
                                    <input type="text" value="{{ $openData->title_ru }}" name="title_ru" class="form-control" id="exampleInputEmail1" placeholder="Введите название" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name English</label>
                                    <input type="text" value="{{ $openData->title_en }}" name="title_en" class="form-control" id="exampleInputEmail1" placeholder="Введите название" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Файл</label>
                                <input type="file" name="file" class="form-control" placeholder="Enter openData name">
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
