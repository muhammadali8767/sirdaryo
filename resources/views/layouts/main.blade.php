<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/front/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/front/libs/calendar.css">
    <link rel="stylesheet" href="/front/libs/slick/slick-theme.css">
    <link rel="stylesheet" href="/front/libs/slick/slick.css">
    <link rel="stylesheet" href="/front/libs/bootstrap.min.css">
    <title>Boyovut tuman hokimligi</title>
    <link rel="stylesheet" href="/front/css/all.min.css">
    <link rel="stylesheet" href="/front/css/main.css">
    <link rel="stylesheet" href="/front/css/media.css">
</head>

<body>
    @if (session('success'))
        <div id="success-alert" class="alert alert-success alert-dismissible fade show" role="alert"
            style="position: absolute ; width: 30%; left: 69%; top: 2%; z-index:100">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <!-- ======== Header Start  ======== -->
    @include('layouts.components.top')
    {{-- @include('layouts.components.carousel') --}}
    @include('layouts.components.menu')
    <!-- ======== Header End    ======== -->

    <!-- ======== Main Start  ======== -->

    <main>
        @if(in_array(Route::current()->getName(), ['main', 'news', 'post', 'category', 'contact']))
            @yield('content')
        @else
            <!-- main slider start -->
            <section class="site-info-page">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-xl-9 px-0">
                            @yield('content')
                        </div>
                        <div class="col-12 col-xl-3 px-0">
                            @include('layouts.components.sidebar')
                        </div>
                    </div>
                </div>
            </section>
            <!-- main slider end -->
        @endif
    </main>
    <!-- ======== Main End    ======== -->

    <!-- ======== Footer Start  ======== -->
    @include('layouts.components.footer')
    <!-- ======== Footer End    ======== -->

    <script src="/front/libs/jquery.js"></script>
    <script src="/front/libs/calendar.js"></script>
    <script src="/front/libs/slick/slick.min.js"></script>
    <script src="/front/libs/countTo.js"></script>
    <script src="/front/libs/bootstrap.bundle.min.js"></script>
    <script src="/front/js/scripts.js"></script>
</body>

</html>
