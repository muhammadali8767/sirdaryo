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
    <title>@lang('menu.logo')</title>
    <link rel="stylesheet" href="/front/css/all.min.css">
    <link rel="stylesheet" href="/front/css/main.css">
    <link rel="stylesheet" href="/front/css/media.css">
</head>

<body>
    @if (session('success'))
      <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">@lang('front.Xabar')</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <strong>{{ session('success') }}</strong>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">@lang('front.Yopish')</button>
                </div>
            </div>
            </div>
        </div>
    @endif

    <!-- ======== Header Start  ======== -->
    @include('layouts.components.top')
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
    <script type="text/javascript">
        window.onload = () => {
            $('#staticBackdrop').modal('show');
        }
    </script>

    {{-- https://app.jivo.ru/join.html?token=2bce41bec0addeaba889143f27baf85b.2129783 --}}
    <script src="//code.jivo.ru/widget/NZBjaXCXz2" async></script>
</body>

</html>
