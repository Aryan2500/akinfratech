<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Bootstrap 5 admin dashboard template & web App ui kit.">
    <meta name="keyword" content="QBoat, Bootstrap 5, Admin Dashboard, Admin Theme">
    <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
    <!--[ Favicon]-->
    <title>Ak infratech :: Dashboard</title>
    <!--[ plugin css file  ]-->
    <link rel="stylesheet" href="{{ asset('assets/bundles/bootstrapdatepicker.min.css') }}">
    <!--[ project css file  ]-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!--[ Jquery Core Js ]-->
    <link rel="stylesheet" href="{{ asset('assets/css/mycss.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bundles/select2.min.css') }}">
    <script src="{{ asset('assets/js/plugins.js') }}"></script>

    @yield('page_css')
</head>

<body class="qboat admin" data-qboat="theme-DodgerBlue" style="height: 100%">
    <!--[ Start:: main sidebar menu link ]-->
    @include('partials.site-head-side-nav')

    <div class="page order-2 flex-grow-1">

        @include('partials.site-head-top-nav')

        @include('partials.greeting')

        <main class="page-body" style="height: 100%">
            <div class="container-fluid">
                @yield('main_section')
            </div>
        </main>


        @include('partials.footer')
    </div>

    @include('partials.site-background')
    <!--[ Jquery Page Js ]-->
    <script src="{{ asset('assets/js/theme.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.min.js"></script>

    <script src="{{ asset('assets/bundles/select2.bundle.js') }}"></script>

    <script src="{{ asset('assets/js/login-form-validator.js') }}"></script>

    <!--[ Chart plugin url ]-->
    <script>
        $('.select2').select2();
    </script>
    @stack('scripts')
</body>



</html>
