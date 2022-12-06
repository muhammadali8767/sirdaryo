@extends('layouts.admin_layout')

@section('title', 'Добавить директора')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить директора</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('homeAdmin') }}">Главная</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('director.index') }}">Директоры</a></li>
                        <li class="breadcrumb-item active">Добавить директора</li>
                    </ol>
                </div>

            </div><!-- /.row -->
            @include('layouts.components.admin.message')
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <form action="{{ route('director.store') }}" method="POST" class="needs-validation" novalidate>
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
                                            <label for="exampleInputEmail1">Lavozim</label>
                                            <input type="text" name="job_title_uz"
                                                class="form-control @error('job_title_uz') is-invalid @enderror"
                                                required value="{{ old('job_title_uz') }}">
                                            @error('job_title_uz')
                                                <p class="text-danger small">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">F.I.SH</label>
                                            <input type="text" name="fullname_uz"
                                                class="form-control @error('fullname_uz') is-invalid @enderror"
                                                required value="{{ old('fullname_uz') }}">
                                            @error('fullname_uz')
                                                <p class="text-danger small">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Biografiya</label>
                                            <textarea name="biography_uz" class="editor" required>{{ old('biography_uz') }}</textarea>
                                            <div class="invalid-feedback">
                                                Please fill a valid data.
                                            </div>
                                            @error('biography_uz')
                                                <p class="text-danger small">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Majburiyatlar</label>
                                            <textarea name="obligation_uz" class="editor" required>{{ old('obligation_uz') }}</textarea>
                                            <div class="invalid-feedback">
                                                Please fill a valid data.
                                            </div>
                                            @error('obligation_uz')
                                                <p class="text-danger small">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Faoliyat</label>
                                            <textarea name="activity_uz" class="editor" required>{{ old('activity_uz') }}</textarea>
                                            <div class="invalid-feedback">
                                                Please fill a valid data.
                                            </div>
                                            @error('activity_uz')
                                                <p class="text-danger small">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel"
                                        aria-labelledby="custom-tabs-four-profile-tab">

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Должность</label>
                                            <input type="text" name="job_title_ru"
                                                class="form-control @error('job_title_ru') is-invalid @enderror"
                                                value="{{ old('job_title_ru') }}">
                                            @error('job_title_ru')
                                                <p class="text-danger small">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Ф.И.О.</label>
                                            <input type="text" name="fullname_ru"
                                                class="form-control @error('fullname_ru') is-invalid @enderror"
                                                value="{{ old('fullname_ru') }}">
                                            @error('fullname_ru')
                                                <p class="text-danger small">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">биография</label>
                                            <textarea name="biography_ru" class="editor">{{ old('biography_ru') }}</textarea>
                                            <div class="invalid-feedback">
                                                Please fill a valid data.
                                            </div>
                                            @error('biography_ru')
                                                <p class="text-danger small">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Обязательства</label>
                                            <textarea name="obligation_ru" class="editor">{{ old('obligation_ru') }}</textarea>
                                            <div class="invalid-feedback">
                                                Please fill a valid data.
                                            </div>
                                            @error('obligation_ru')
                                                <p class="text-danger small">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Деятельность</label>
                                            <textarea name="activity_ru" class="editor">{{ old('activity_ru') }}</textarea>
                                            <div class="invalid-feedback">
                                                Please fill a valid data.
                                            </div>
                                            @error('activity_ru')
                                                <p class="text-danger small">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel"
                                        aria-labelledby="custom-tabs-four-messages-tab">

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Position</label>
                                            <input type="text" name="job_title_en"
                                                class="form-control @error('job_title_en') is-invalid @enderror"
                                                value="{{ old('job_title_en') }}">
                                            @error('job_title_en')
                                                <p class="text-danger small">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Full name</label>
                                            <input type="text" name="fullname_en"
                                                class="form-control @error('fullname_en') is-invalid @enderror"
                                                value="{{ old('fullname_en') }}">
                                            @error('fullname_en')
                                                <p class="text-danger small">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Biography</label>
                                            <textarea name="biography_en" class="editor">{{ old('biography_en') }}</textarea>
                                            <div class="invalid-feedback">
                                                Please fill a valid data.
                                            </div>
                                            @error('biography_en')
                                                <p class="text-danger small">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Obligations</label>
                                            <textarea name="obligation_en" class="editor">{{ old('obligation_en') }}</textarea>
                                            <div class="invalid-feedback">
                                                Please fill a valid data.
                                            </div>
                                            @error('obligation_en')
                                                <p class="text-danger small">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Activity</label>
                                            <textarea name="activity_en" class="editor">{{ old('activity_en') }}</textarea>
                                            <div class="invalid-feedback">
                                                Please fill a valid data.
                                            </div>
                                            @error('activity_en')
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
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="feature_image">Изображение</label>
                                            <img src="{{ old('image') }}" alt="" class="img-uploaded"
                                                style="display: block; width: 300px">
                                            <input type="text" name="image"
                                                class="form-control @error('password') is-invalid @enderror"
                                                id="feature_image" name="feature_image" value="{{ old('image') }}"
                                                readonly>
                                            <div class="invalid-feedback">
                                                Please fill a valid data.
                                            </div>
                                            @error('image')
                                                <p class="text-danger small">{{ $message }}</p>
                                            @enderror
                                            <a href="" class="popup_selector" data-inputid="feature_image">Выбрать
                                                изображение</a>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Номер телефона</label>
                                            <input type="phone" name="phone"
                                                class="form-control @error('phone') is-invalid @enderror"
                                                required value="{{ old('phone') }}">
                                            @error('phone')
                                                <p class="text-danger small">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-3">

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Время приема</label>
                                            <input type="text" name="reception_times"
                                                class="form-control @error('reception_times') is-invalid @enderror"
                                                required value="{{ old('reception_times') }}">
                                            @error('reception_times')
                                                <p class="text-danger small">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Фейсбук линк</label>
                                            <input type="text" name="fb_link"
                                                class="form-control @error('fb_link') is-invalid @enderror"
                                                required value="{{ old('fb_link') }}">
                                            @error('fb_link')
                                                <p class="text-danger small">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Твиттер линк</label>
                                            <input type="text" name="tw_link"
                                                class="form-control @error('tw_link') is-invalid @enderror"
                                                required value="{{ old('tw_link') }}">
                                            @error('tw_link')
                                                <p class="text-danger small">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Инстаграм линк</label>
                                            <input type="text" name="ig_link"
                                                class="form-control @error('ig_link') is-invalid @enderror"
                                                required value="{{ old('ig_link') }}">
                                            @error('ig_link')
                                                <p class="text-danger small">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Линкед ин линк</label>
                                            <input type="text" name="in_link"
                                                class="form-control @error('in_link') is-invalid @enderror"
                                                required value="{{ old('in_link') }}">
                                            @error('in_link')
                                                <p class="text-danger small">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Ютуб линк</label>
                                            <input type="text" name="yt_link"
                                                class="form-control @error('yt_link') is-invalid @enderror"
                                                required value="{{ old('yt_link') }}">
                                            @error('yt_link')
                                                <p class="text-danger small">{{ $message }}</p>
                                            @enderror
                                        </div>
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
        </div>
    </section>
@endsection
