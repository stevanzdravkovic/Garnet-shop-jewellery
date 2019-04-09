<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="description" content=" Divisima | eCommerce Template">
    <meta name="keywords" content="divisima, eCommerce, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="{{asset('image/logo11.ico')}}" rel="shortcut icon"/>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/slicknav.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/animate.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>



    <!--[if lt IE 9]>
    <script src="{{asset('https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')}}"></script>
    <script src="{{asset('https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
    <![endif]-->

</head>
<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header section -->
@include('components.header')
<!-- Header section end -->
@include('components.nav')

<!-- Hero section -->
@yield('slider')
<!-- Hero section end -->

<!-- letest product section -->
@yield('content')
<!-- letest product section end -->

<!-- Footer section -->
@include('components.footer')
<!-- Footer section end -->



<!--====== Javascripts & Jquery ======-->
<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.slicknav.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jquery.nicescroll.min.js')}}"></script>
<script src="{{asset('js/jquery.zoom.min.js')}}"></script>
<script src="{{asset('js/jquery-ui.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
@yield('scripts')


</body>
</html>
