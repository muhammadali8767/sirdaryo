@extends('layouts.admin_layout')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Сообщение {{ $contact->id }}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('homeAdmin') }}">Главная</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('contact.index') }}">Все сообщения</a></li>
                        <li class="breadcrumb-item active">{{ $contact->id }}</li>
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
                    <h3>Отправитель: {{ $contact->ism . ' ' . $contact->familya . ' ' . $contact->otasi }}</h3>
                    <h5>Телефон отправителя: {{ $contact->telefon }}</h5>
                    <h5>Емаил отправителя: {{ $contact->email }}</h5>
                    <h5>Тип:
                        @if ($contact->type == 1)
                            Hokimga murojat
                        @else
                            Hokimiyatga xat
                        @endif
                    </h5>
                    <form action="{{ route('contact.destroy', $contact->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                    @switch($contact->seen)
                            @case(0)
                                <h5>Состояние: Не прочитано </h5>
                            @break
                            @case(1)
                                <h5>Состояние: Прочитано</h5>
                                @break
                            @case(2)
                                <h5>Состояние: В процессе выполнения</h5>
                                @break
                            @case(3)
                                <h5>Состояние: Выполнено</h5>
                                @break
                            @default
                        @endswitch
                        </form>
                    </h5>
                    <hr>
                    @if ($contact->file)
                        <h5>Файл: <a class="btn btn-info" href="/{{ $contact->file }}" download="">Загрузить</a></h5>
                    @endif
                    <p>Сообщение: {{ $contact->text }}</p>
                </div>
                <!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
