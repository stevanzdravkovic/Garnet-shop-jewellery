<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="{{asset('image/logo11.ico')}}" rel="shortcut icon"/>

    <link href="{{asset('css/admincss/bootstrap.css')}}" rel="stylesheet" />


    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="{{asset('css/admincss/font-awesome.css')}}" rel="stylesheet" />
    <!-- CUSTOM STYLES-->


    <link href="{{asset('css/admincss/custom.css')}}" rel="stylesheet" />

    <link href="{{asset('css/custom.css')}}" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>



<div id="wrapper">
@include('components.adminComponents.header')
<!-- /. NAV TOP  -->


@include('components.adminComponents.nav')


@yield('content')<!-- /. NAV SIDE  -->
    <!-- /. PAGE WRAPPER  -->
</div>
@include('components.adminComponents.footer')

<!-- /. WRAPPER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="{{asset('js/jspule/jquery-1.10.2.js')}}"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="{{asset('js/jspule/bootstrap.min.js')}}"></script>
<!-- CUSTOM SCRIPTS -->
<script src="{{asset('js/jspule/custom.js')}}"></script>
<script src="{{asset('/js/jspule/jquery.metisMenu.js')}}"></script>


</body>
</html>
