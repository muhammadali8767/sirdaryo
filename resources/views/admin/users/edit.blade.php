@extends('layouts.admin_layout')

@section('title', 'Редактирование пользователя')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактирование пользователя: {{ $category['title'] }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('homeAdmin') }}">Главная</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('category.index') }}">Пользователи</a></li>
                        <li class="breadcrumb-item active">Редактирование пользователя</li>
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
                        <form action="{{ route('users.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Ф.И.О.</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Введите имя пользователя" value="{{ $user->name }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Эл. адрес</label>
                                    <input type="text" name="email" class="form-control" id="email" placeholder="Введите адрес электронной почты пользователя" value="{{ $user->email }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Пароль</label>
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Введите пароль пользователя" required>
                                </div>
                                <div class="form-group">
                                    <label for="password2">Подтверждение пароля</label>
                                    <input type="password" name="confirm_password" class="form-control" id="password2" placeholder="Введите подтверждение пароля" required>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Сохранить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
