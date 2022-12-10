@extends('layouts.main')

@section('content')
<div class="container">
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Asosiy</a></li>
            <li class="breadcrumb-item active" aria-current="page">@lang('menu.Hokimga murojaat')</li>
        </ol>
    </nav>
    <h2 class="section-title mb-30">
        @lang('menu.Hokimga murojaat')
    </h2>

    <form action="{{ route('post-contact') }}" method="post" class="appeal-form" enctype="multipart/form-data">
        @csrf
        <div class="row mb-4">
            <div class="col-12 mb-3 mb-lg-0">
                <div class="appeal-form-box">
                    <label for="gender" class="appeal-form-label">
                        Murojat turi
                        <span class="appeal-form-required">*</span>
                    </label>
                    <select class="form-select appeal-form-control" name="type" id="gender">
                        <option value="1">Hokimga murojat</option>
                        <option value="2">Hokimiyatga xat</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-12 col-lg-4 mb-3 mb-lg-0">
                <div class="appeal-form-box">
                    <label for="lastname" class="appeal-form-label">
                        Familiya
                        <span class="appeal-form-required">*</span>
                    </label>
                    <input class="appeal-form-control" name="familya" id="lastname" type="text" placeholder="-"
                        required>
                </div>
            </div>
            <div class="col-12 col-lg-4 mb-3 mb-lg-0">
                <div class="appeal-form-box">
                    <label for="firstname" class="appeal-form-label">
                        Ismi
                        <span class="appeal-form-required">*</span>
                    </label>
                    <input class="appeal-form-control" name="ism" id="firstname" type="text"
                        placeholder="-" required>
                </div>
            </div>
            <div class="col-12 col-lg-4 mb-3 mb-lg-0">
                <div class="appeal-form-box">
                    <label for="middlename" class="appeal-form-label">
                        Otasining ismi
                        <span class="appeal-form-required">*</span>
                    </label>
                    <input class="appeal-form-control" name="otasi" id="middlename" type="text"
                        placeholder="-" required>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-12 col-lg-6 mb-3 mb-lg-0">
                <div class="appeal-form-box">
                    <label for="gender" class="appeal-form-label">
                        Jinsi
                        <span class="appeal-form-required">*</span>
                    </label>
                    <select class="form-select appeal-form-control" name="jinsi" id="gender">
                        <option value="" selected>Tanlang ...</option>
                        <option value="male">Erkak</option>
                        <option value="female">Ayol</option>
                    </select>
                </div>
            </div>
            <div class="col-12 col-lg-6 mb-3 mb-lg-0">
                <div class="appeal-form-box">
                    <label for="address" class="appeal-form-label">
                        Yashash manzili
                        <span class="appeal-form-required">*</span>
                    </label>
                    <input class="appeal-form-control" name="manzil" id="address" type="text" placeholder="-"
                        required>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-12 col-lg-6 mb-3 mb-lg-0">
                <div class="appeal-form-box">
                    <label for="phone-number" class="appeal-form-label">
                        Telefon raqami
                        <span class="appeal-form-required">*</span>
                    </label>
                    <input class="appeal-form-control" name="telefon" id="phone-number" type="text"
                        placeholder="-" required>
                </div>
            </div>
            <div class="col-12 col-lg-6 mb-3 mb-lg-0">
                <div class="appeal-form-box">
                    <label for="email" class="appeal-form-label">
                        Email
                        <span class="appeal-form-required">*</span>
                    </label>
                    <input class="appeal-form-control" name="email" id="email" type="text" placeholder="-"
                        required>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-12 mb-3 mb-lg-0">
                <div class="appeal-form-box">
                    <label for="message" class="appeal-form-label">
                        Murojaat matni
                        <span class="appeal-form-required">*</span>
                    </label>
                    <textarea class="appeal-form-control" name="text" id="message" cols="30"
                        rows="5" placeholder="-" required></textarea>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="appeal-form-files">
                <input type="file" name="file" id="appeal-form-file">
                <input type="text" class="appeal-form-control" readonly
                    value="fayl tanlanmagan">
                <label for="appeal-form-file" class="appeal-form-file-label">
                    <i class="far fa-plus-circle"></i>
                    Faylni qoshish
                </label>
            </div>
        </div>
        <div class="row align-items-center mb-4">
            <div class="col-12 col-lg-6 mb-3 mb-lg-0">
                <div class="d-flex align-items-center">
                    <input type="checkbox" class="appeal-form-checkbox" required>
                    <p class="appeal-form-checktext">
                        I agree to
                        <a href="#">Terms of use</a>
                        and
                        <a href="#">Privacy Policy</a>
                    </p>
                </div>
            </div>
            <div class="col-12 col-lg-6 text-end">
                <button class="appeal-form-submit-btn">@lang('front.Yuborish')</button>
            </div>
        </div>
    </form>
</div>
@endsection


