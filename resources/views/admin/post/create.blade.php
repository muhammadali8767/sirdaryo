@extends('layouts.admin_layout')

@section('title', 'Добавить статью')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить сатью</h1>
                </div><!-- /.col -->
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
                    <div class="card card-primary card-outline card-outline-tabs">
                        <!-- form start -->
                        <form action="{{ route('post.store') }}" method="POST" class="needs-validation" novalidate>
                            @csrf
                            <div class="card-header p-0 border-bottom-0">
                                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill"
                                            href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home"
                                            aria-selected="true">O'zbekcha</a>
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
                                            <label for="exampleInputEmail1">Sarlavha O'zbekcha</label>
                                            <input type="text" name="title_uz"
                                                class="form-control @error('password') is-invalid @enderror"
                                                id="exampleInputEmail1" required value="{{ old('title_uz') }}">
                                        @error('title_uz')
                                            <p class="text-danger small">{{ $message }}</p>
                                        @enderror

                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Qisqacha matn O'zbekcha</label>
                                            <textarea name="short_uz" rows="5"
                                                class="form-control @error('password') is-invalid @enderror"
                                                required>{{ old('short_uz') }}</textarea>
                                            <div class="invalid-feedback">
                                                Please fill a valid data.
                                            </div>
                                            @error('short_uz')
                                                <p class="text-danger small">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Matn O'zbekcha</label>
                                            <textarea name="text_uz" class="editor" required>{{ old('text_uz') }}</textarea>
                                            <div class="invalid-feedback">
                                                Please fill a valid data.
                                            </div>
                                            @error('text_uz')
                                                <p class="text-danger small">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel"
                                        aria-labelledby="custom-tabs-four-profile-tab">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Название Русский</label>
                                            <input type="text" name="title_ru"
                                                class="form-control @error('password') is-invalid @enderror"
                                                id="exampleInputEmail1" value="{{ old('title_ru') }}">
                                            <div class="invalid-feedback">
                                                Please fill a valid data.
                                            </div>
                                            @error('title_ru')
                                                <p class="text-danger small">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Кароткий текст Русский</label>
                                            <textarea name="short_ru" rows="5"
                                                class="form-control @error('password') is-invalid @enderror">{{ old('short_ru') }}</textarea>
                                            <div class="invalid-feedback">
                                                Please fill a valid data.
                                            </div>
                                            @error('short_ru')
                                                <p class="text-danger small">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Текст Русский</label>
                                            <textarea name="text_ru" class="editor">{{ old('text_ru') }}</textarea>
                                            <div class="invalid-feedback">
                                                Please fill a valid data.
                                            </div>
                                            @error('text_ru')
                                                <p class="text-danger small">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel"
                                        aria-labelledby="custom-tabs-four-messages-tab">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Title English</label>
                                            <input type="text" name="title_en"
                                                class="form-control @error('password') is-invalid @enderror"
                                                id="exampleInputEmail1" value="{{ old('title_en') }}">
                                            <div class="invalid-feedback">
                                                Please fill a valid data.
                                            </div>
                                            @error('title_en')
                                                <p class="text-danger small">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Short content English</label>
                                            <textarea name="short_en" rows="5"
                                                class="form-control @error('password') is-invalid @enderror">{{ old('short_en') }}</textarea>
                                            <div class="invalid-feedback">
                                                Please fill a valid data.
                                            </div>
                                            @error('short_en')
                                                <p class="text-danger small">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Content English</label>
                                            <textarea name="text_en" class="editor">{{ old('text_en') }}</textarea>
                                            <div class="invalid-feedback">
                                                Please fill a valid data.
                                            </div>
                                            @error('text_en')
                                                <p class="text-danger small">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <!-- select -->
                                    <div class="row">
                                        <div class="col-1">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Показат в каруселе</label>
                                                <input type="checkbox" name="is_carousel"
                                                    class="form-control @error('is_carousel') is-invalid @enderror"
                                                    @if(old('is_carousel')) checked @endif value="1">
                                                @error('is_carousel')
                                                    <p class="text-danger small">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>Выберите категорию</label>
                                                <select name="category_id"
                                                    class="form-control @error('password') is-invalid @enderror" required>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}" @if ($category->id == old('category_id')) selected @endif>{{ $category->title }}</option>
                                                    @endforeach
                                                </select>
                                                <div class="invalid-feedback">
                                                    Please fill a valid data.
                                                </div>
                                                @error('category_id')
                                                    <p class="text-danger small">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div class="form-group">
                                                <label for="feature_image">Изображение статьи</label>
                                                <input type="text" name="img"
                                                    class="form-control @error('password') is-invalid @enderror" id="feature_image"
                                                    name="feature_image" value="{{ old('img') }}" readonly>
                                                <div class="invalid-feedback">
                                                    Please fill a valid data.
                                                </div>
                                                @error('img')
                                                    <p class="text-danger small">{{ $message }}</p>
                                                @enderror
                                                <a href="" class="popup_selector" data-inputid="feature_image">Выбрать изображение</a>
                                            </div>
                                            <img src="{{ old('img') }}" alt="" class="img-uploaded" style="display: block; width: 300px">
                                        </div>

                                    </div>
                                </div>
                            </div>
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
