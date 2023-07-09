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
    <title> {{ env('APP_NAME') }} :: Sign In</title>
    <!--[ plugin css file  ]-->
    <!--[ project css file  ]-->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/mycss.css">
    <!--[ Jquery Core Js ]-->
    <script src="assets/js/plugins.js"></script>

</head>

<body class="qboat admin auth" data-qboat="theme-DodgerBlue">
    <!--[ Start:: main sidebar menu link ]-->
    <aside class="sidebar shadow auth2">
        <div class="container-fluid">
            <!--[ sidebar:: menu list ]-->
            <div class="flex-grow-1">
                <ul class="menu-list">
                    <!--[ Start:: brand logo and name ]-->
                    <li class="brand-icon mb-3 border-0">
                        <a href="index.html">

                            <span class="fs-5 ms-2">{{ env('APP_NAME') }}</span>
                        </a>

                    </li>
                    <li class="mt-xxl-5 mt-3">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <h2 class="text-accent fw-bold display-6 mb-3">Kick<br> Start your<br> Project.</h2>
                                    <p class="lead text-dark"></p>
                                </div>
                                <div class="carousel-item">
                                    <h2 class="text-accent fw-bold display-6 mb-3"> </h2>
                                    <p class="lead text-dark"> </p>
                                </div>
                                <div class="carousel-item">
                                    <h2 class="text-accent fw-bold display-6 mb-3"> </h2>
                                    <p class="lead text-dark"> </p>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>

        </div>
    </aside>
    <div class="page order-2">
        <!--[ Start:: page body area ]-->
        <main class="page-body flex-grow-1">
            <div class="container-fluid">
                <div class="row g-xl-4 g-lg-3 g-2 justify-content-between">

                    <div class="col-xxl-6 col-xl-7 col-lg-10">

                        <form class="pt-3" id="login_form" method="post" action="{{ route('login') }}">
                            @csrf
                            <ul class="row g-3 list-unstyled li_animate">
                                <li class="col-12 mb-5">
                                    <h2 class="text-gradient font-heading">Sign in to your Account</h2>
                                    <span class="text-muted">Amazing Features to make your life easier & work
                                        efficient.</span>
                                </li>

                                @include('partials.alerts')

                                <li class="col-12">
                                    <div class="mb-2">
                                        <label class="form-label">Email address</label>
                                        <input type="email" name="email" class="form-control form-control-lg"
                                            placeholder="name@example.com" value="{{ old('email') }}">
                                    </div>
                                </li>
                                <li class="col-12">
                                    <div class="mb-2">
                                        <div class="form-label">
                                            <span class="d-flex justify-content-between align-items-center"> Password
                                                <a class="text-primary" href="#">Forgot
                                                    Password?</a>
                                            </span>
                                        </div>
                                        <input type="password" name="password" class="form-control form-control-lg"
                                            placeholder="***************">
                                    </div>
                                </li>

                                <li class="col-12 mt-4">
                                    <button class="btn btn-lg btn-block btn-dark lift text-uppercase px-5"
                                        title="">SIGN IN</button>
                                </li>

                            </ul>
                            <!--[ ul.row end ]-->
                        </form>
                    </div>
                    <div class="col-xxl-4 col-xl-3 col-lg-12">
                    </div>
                </div>
                <!--[ .row end ]-->
            </div>
        </main>
        @include('partials.footer')
    </div>

    <!--[ Start:: main body background and img ]-->
    <div class="body-bg">
        <svg class="img-fluid top-0" viewBox="0 0 1920 1080" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_121_2)">
                <g opacity="0.14" filter="url(#filter0_f_121_2)">
                    <circle cx="1840.5" cy="600.5" r="225.5" fill="var(--accent-color)" />
                </g>
                <g opacity="0.08" filter="url(#filter1_f_121_2)">
                    <circle cx="222.5" cy="118.5" r="327.5" fill="var(--primary-color)" />
                </g>
            </g>
            <defs>
                <filter id="filter0_f_121_2" x="1265" y="25" width="1151" height="1151"
                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                    <feGaussianBlur stdDeviation="175" result="effect1_foregroundBlur_121_2" />
                </filter>
                <filter id="filter1_f_121_2" x="-455" y="-559" width="1355" height="1355"
                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                    <feGaussianBlur stdDeviation="175" result="effect1_foregroundBlur_121_2" />
                </filter>
                <clipPath id="clip0_121_2">
                    <rect width="1920" height="1080" fill="white" />
                </clipPath>
            </defs>
        </svg>
        <svg width="260" height="350" viewBox="0 0 260 350" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path opacity="0.3" fill="var(--theme-color5)"
                d="M129.099 290.457H162.14H162.171L145.635 311.735L129.099 290.457Z" />
            <path opacity="0.5" fill="var(--theme-color6)"
                d="M288.197 279.48L260.585 314.994L233.004 279.48H288.197Z" />
            <path opacity="0.7" fill="var(--theme-color6)"
                d="M233.004 350.478H177.812L205.393 314.994L233.004 350.478Z" />
            <path opacity="0.4" fill="var(--theme-color5)"
                d="M233.004 350.478L260.585 314.994L288.197 350.478H233.004Z" />
            <path opacity="1" fill="var(--accent-color)"
                d="M260.585 172.998L233.004 137.484H288.197L260.585 172.998Z" />
            <path opacity=".8" fill="var(--primary-color)"
                d="M197.68 305.062L205.393 314.994H150.201L177.781 279.48L197.68 305.062Z" />
            <path opacity="1" fill="var(--theme-color5)"
                d="M225.479 269.583L233.192 279.514H178L205.581 244L225.479 269.583Z" />
            <path opacity="1" fill="var(--accent-color)"
                d="M233.004 279.48L205.393 243.996H260.585L233.004 279.48Z" />
            <path opacity="1" fill="var(--primary-color)" d="M232.611 350.484L205 315H260.192L232.611 350.484Z" />
            <path opacity="0.5" fill="var(--theme-color5)"
                d="M202.524 203.07L212.087 190.74L221.682 203.07H202.524Z" />
            <path opacity="1" fill="var(--primary-color)"
                d="M218.412 129.551L233.467 110.179L248.522 129.551H218.412Z" />
            <path opacity="0.3" fill="var(--theme-color6)"
                d="M233.004 208.482H288.197L260.585 243.996L233.004 208.482Z" />
            <path opacity="1" fill="var(--primary-color)"
                d="M260.616 172.998L288.197 208.482H233.004L260.616 172.998Z" />
            <path opacity="0.6" fill="var(--accent-color)"
                d="M185.494 289.411L177.781 279.48H232.974L205.393 314.994L185.494 289.411Z" />
            <path opacity="1" fill="var(--accent-color)"
                d="M224.489 204.577L241.056 225.885H207.923L224.489 204.577Z" />
        </svg>
    </div>
    <!--[ Jquery Page Js ]-->
    <script src="assets/js/theme.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.min.js"></script>
    <script src="{{ asset('assets/js/login-form-validator.js') }}"></script>



</body>



</html>
