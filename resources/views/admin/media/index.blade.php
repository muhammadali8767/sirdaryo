@extends('layouts.admin_layout')

@section('title', 'Все медиа')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Все медиа</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('homeAdmin') }}">Главная</a></li>
                        <li class="breadcrumb-item active">Все медиа</li>
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
                                    Мелиа
                                </th>
                                <th>
                                    Тип
                                </th>
                                <th>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mediaList as $media)
                                <tr>
                                    <td>
                                        {{ $media->id }}
                                    </td>
                                    <td>
                                        {{ $media->title }}
                                    </td>
                                    <td>
                                        {{ $media->type }}
                                    </td>
                                    {{-- <td>
                                        <a href="{{ route('media', $media->slug) }}">
                                            {{ route('media', $media->slug) }}
                                        </a>
                                    </td> --}}
                                    <td class="project-actions text-right">
                                        <a class="btn btn-info btn-sm" href="{{ route('medias.edit', $media->id) }}">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <form action="{{ route('medias.destroy', $media->id) }}" method="POST"
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
                {{ $mediaList->links() }}
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
