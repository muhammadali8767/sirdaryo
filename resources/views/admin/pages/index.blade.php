@extends('layouts.admin_layout')

@section('title', 'Все страницы')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Все страницы</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('homeAdmin') }}">Главная</a></li>
                    <li class="breadcrumb-item active">Все страницы</li>
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
                                    Название
                                </th>
                                <th>
                                    URL
                                </th>
                                <th>
                                    Дата добавления
                                </th>
                                <th>
                                    Тип
                                </th>
                                <th>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pages as $page)
                                <tr>
                                    <td>
                                        {{ $page->id }}
                                    </td>
                                    <td>
                                        {{ $page->title }}
                                    </td>
                                    <td>
                                        <a href="{{ route('page', $page->slug) }}">
                                            {{ route('page', $page->slug) }}
                                        </a>
                                    </td>
                                    <td>
                                        {{ $page->created_at }}
                                    </td>

                                    <td>
                                        @if ($page->type == 1)
                                            Обычны
                                        @else
                                            С фото
                                        @endif
                                    </td>

                                    <td class="project-actions text-right">
                                        <a class="btn btn-info btn-sm" href="{{ route('pages.edit', $page->id) }}">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        @if ($page->id > 9)
                                            <form action="{{ route('pages.destroy', $page->id) }}" method="POST"
                                                style="display: inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm delete-btn">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>                                            
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <div class="row justify-content-center align-items-center">
                {{ $pages->links() }}
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
