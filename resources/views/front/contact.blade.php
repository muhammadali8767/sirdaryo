@extends('layouts.main')

@section('content')
        <!-- main slider start -->
        <section class="contact-page">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xl-9 px-0">
                        <div class="container">
                            <h2 class="section-title mb-30">
                                @lang('menu.Aloqa')
                            </h2>
                            <div class="row align-items-center">
                                <div class="col-12 col-lg-5 mb-3 mb-sm-5 mb-lg-0">
                                    @include('layouts.components.aloqa')
                                </div>
                                <div class="col-12 col-lg-7 mb-3 mb-sm-5 mb-lg-0">
                                    @include('layouts.components.map')
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-3 px-0">
                        @include('layouts.components.calendar')
                    </div>
                </div>
            </div>
        </section>
        <!-- main slider end -->


@endsection


