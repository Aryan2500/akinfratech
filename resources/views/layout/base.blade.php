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
    <link rel="stylesheet" href="assets/bundles/bootstrapdatepicker.min.css">
    <!--[ project css file  ]-->
    <link rel="stylesheet" href="assets/css/style.css">
    <!--[ Jquery Core Js ]-->
    <script src="assets/js/plugins.js"></script>

    @yield('page_css')
</head>

<body class="qboat admin" data-qboat="theme-DodgerBlue">
    <!--[ Start:: main sidebar menu link ]-->
    @include('partials.side-nav')

    <div class="page order-2 flex-grow-1">

        @include('partials.top-nav')

        @include('partials.greeting')

        @yield('main_section')

        @include('partials.footer')
    </div>

    @include('partials.site-background')
    <!--[ Jquery Page Js ]-->
    <script src="assets/js/theme.js"></script>
    <!--[ Chart plugin url ]-->

    @stack('scripts')
</body>



</html>
