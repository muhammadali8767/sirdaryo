@extends('layouts.admin_layout')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Сообщение от {{ $contact->name }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('homeAdmin') }}">Главная</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('contact.index') }}">Все сообщения</a></li>
                        <li class="breadcrumb-item active">{{ $contact->name }}</li>
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
            <div class="card">
                <div class="card-body">
                    <h3>Имя отправителя: {{ $contact->name }}</h3>
                    <h3>Телефон отправителя: {{ $contact->phone }}</h3>
                    <h3>Тема: {{ $contact->location }}</h3>
                    <p>Сообщение: {{ $contact->text }}</p>
                </div>
                <!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
