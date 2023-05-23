<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from wallsproperty.netlify.app/homepage-v1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 May 2023 09:13:25 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Rethouse - Real Estate HTML Template">
    <meta name="keywords" content="Real Estate, Property, Directory Listing, Marketing, Agency" />
    <meta name="author" content="mardianto - retenvi.com">
    <title>Rethouse - Real Estate HTML Template</title>

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link rel="manifest" href="site.webmanifest">
    <!-- favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="{{ asset('assets/front/images/icon.png') }}">
    <meta name="theme-color" content="#3454d1">
    <link href="{{ asset('assets/front/css/stylesbd04.css') }}" rel="stylesheet">
</head>

<body>
    <!-- HEADER START -->
    @include('front.includes.index-header')
    <!-- HEADER END -->


    <!-- CONTENT START -->
    @yield('content')
    <!-- CONTENT END -->

    <!-- FOOTER START -->
    @include('front.includes.footer')
    <!-- FOOTER END -->

    <!-- SCROLL TO TOP -->
    <a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- END SCROLL TO TOP -->
    <script src="{{ asset('assets/front/js/index.bundlebd04.js') }}"></script>

</body>


<!-- Mirrored from wallsproperty.netlify.app/homepage-v1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 May 2023 09:14:26 GMT -->
</html>
