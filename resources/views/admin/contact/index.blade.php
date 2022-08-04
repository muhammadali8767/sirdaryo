@extends('layouts.admin_layout')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Все сообщения</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('homeAdmin') }}">Главная</a></li>
                        <li class="breadcrumb-item active">Все сообщения</li>
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
                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                            <tr>
                                <th style="width: 5%">
                                    ID
                                </th>
                                <th>
                                    Отправитель
                                </th>
                                <th>
                                    Дата получения заявки
                                </th>
                                <th>
                                    Тема
                                </th>
                                <th>
                                </th>
                                <th>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contacts as $contact)
                                <tr @if ($contact->seen == 0) class="text-muted" @endif>
                                    <td>
                                        {{ $contact->id }}
                                    </td>
                                    <td>
                                        {{ $contact->name }}
                                    </td>
                                    <td>
                                        {{ $contact->created_at }}
                                    </td>

                                    <td>
                                        {{ $contact->location }}
                                    </td>

                                    <td>
                                        @if ($contact->seen == 1)
                                            Прочитано
                                        @else
                                            Не прочитано
                                        @endif
                                    </td>

                                    <td class="project-actions text-right">
                                        <a class="btn btn-info btn-sm" href="{{ route('contact.show', $contact->id) }}">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <form action="{{ route('contact.destroy', $contact->id) }}" method="POST"
                                            style="display: inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm delete-btn">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <div class="row justify-content-center align-items-center">
                {{ $contacts->links() }}
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
