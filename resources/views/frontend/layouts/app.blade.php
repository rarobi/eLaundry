<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- ========== Meta Tags ========== -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="{{ $config->meta_description ?? config('misc.configuration.meta_description') }}">
        <meta name="keywords" content="{{ $config->meta_keywords ?? config('misc.configuration.meta_keywords') }}">
        <meta name="author" content="{{ $config->site_name ?? config('misc.configuration.site_name') }}">

        <!-- ========== Page Title ========== -->
        @yield('meta')

        <title>{{ $config->site_name ?? env('APP_NAME') }} | Life easy here</title>

        <!-- ========== Favicon Icon ========== -->
        <link rel="shortcut icon" type="image/x-icon" href="#">

        <!-- ========== Start Stylesheet ========== -->

        <link href="{{ asset('/assets/frontend/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/assets/backend/plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/assets/frontend/css/custom.css') }}" rel="stylesheet">
        <!-- ========== End Stylesheet ========== -->
        @yield('header-css')
    </head>

    <body class="d-flex flex-column min-vh-100">

        <!-- Preloader Start -->
        <!-- <div class="se-pre-con"></div> -->
        <!-- Preloader Ends -->

        <!-- Header
        ============================================= -->
        @include('frontend.includes.header')
        <!-- End Header -->

        @yield('content')

        <!-- Start Footer
        ============================================= -->
        @include('frontend.includes.footer')
        <!-- End Footer -->

        <!-- Start JS
        ============================================= -->
        <script src="{{ asset('/assets/frontend/js/jquery-3.7.1.min.js') }}"></script>
        <script src="{{ asset('/assets/frontend/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('/assets/frontend/js/main.js') }}"></script>
        <script>
            
        </script>
        @yield('footer-script')
    </body>
</html>
