@extends('layouts.main')

@section('content')

    <div class="container-fluid globus__img header__bg d-flex justify-content-center p-0">
        <img src="/images/globus.png" alt="">
        <div class="container contact__address-contact-text">
            <h3>@lang('contact.contact_title')</h3>
            <div>
                <ul>
                    @lang('contact.manzil')
                </ul>
                <ul>
                    @lang('contact.kontaktlar')
                </ul>
            </div>
        </div>
    </div>

    @include('layouts.components.contact_form')

@endsection
