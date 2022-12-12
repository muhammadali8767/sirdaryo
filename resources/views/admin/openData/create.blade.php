@extends('layouts.admin_layout')

@section('title', 'Добавить Открытую информацию')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить Открытую информацию</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('homeAdmin') }}">Главная</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('openData.index') }}">Открытая информация</a></li>
                        <li class="breadcrumb-item active">Добавить Открытую информацию</li>
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
                        <form action="{{ route('openData.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nomi O'zbekcha *</label>
                                    <input type="text" name="title_uz" class="form-control" id="exampleInputEmail1" placeholder=" nomini kiriting" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Название Русский</label>
                                    <input type="text" name="title_ru" class="form-control" id="exampleInputEmail1" placeholder="Введите название">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name English</label>
                                    <input type="text" name="title_en" class="form-control" id="exampleInputEmail1" placeholder="Enter openData name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Файл</label>
                                    <input type="file" name="file" class="form-control" placeholder="Enter openData name">
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
