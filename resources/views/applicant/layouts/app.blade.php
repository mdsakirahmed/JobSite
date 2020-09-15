<!DOCTYPE html>
<html>

<!-- Mirrored from expert-themes.com/html/meto/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Apr 2020 19:26:59 GMT -->
<head>
    <meta charset="utf-8">
    <title> {{ 'jobSite' }} | @stack('title') </title>
    <!-- Stylesheets -->
    <link href="{{ asset('assets/frontend/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/responsive.css') }}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Color Switcher Mockup -->
    <link href="{{ asset('assets/frontend/css/color-switcher-design.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('assets/frontend/images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/frontend/images/favicon.png') }}" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="{{ asset('assets/frontend/js/respond.js') }}"></script><![endif]-->

    <!--SweetAlert 2-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <!--====== AJAX ======-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body class="hidden-bar-wrapper">

<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header-->
    @include('applicant.layouts.header')
    <!-- End Main Header -->

    @yield('content')

    <!-- Developer sign -->
    <section class="newsletter-section margin-bottom text-center">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row clearfix">
                    <!-- Title Column -->
                    <div class="title-column col-lg-12 col-md-12 col-sm-12 text-center">
                        <h4>#jobSite</h4>
                        <div class="text">Developed by Md. Sakir Ahmed</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Developer sign -->

    <!-- Main Footer -->
    @include('applicant.layouts.footer')
    <!-- End Main Footer -->


</div>
<!--End pagewrapper-->

<!-- Logout script-->
@include('applicant.includes.profile')
@include('includes.logout')
<!--End Logout script-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>


<script src="{{ asset('assets/frontend/js/jquery.js') }}"></script>
<script src="{{ asset('assets/frontend/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('assets/frontend/js/appear.js') }}"></script>
<script src="{{ asset('assets/frontend/js/parallax.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/tilt.jquery.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery.paroller.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/owl.js') }}"></script>
<script src="{{ asset('assets/frontend/js/mixitup.js') }}"></script>
<script src="{{ asset('assets/frontend/js/wow.js') }}"></script>
<script src="{{ asset('assets/frontend/js/nav-tool.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/frontend/js/script.js') }}"></script>
<script src="{{ asset('assets/frontend/js/color-settings.js') }}"></script>

</body>

<!-- Mirrored from expert-themes.com/html/meto/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Apr 2020 19:27:02 GMT -->
</html>

