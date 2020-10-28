<!DOCTYPE html>
<html lang="en">
<head>	
<title>@yield('title')</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{asset('admin-assets/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/styles/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/styles/responsive.css')}}">

<style type="text/css">
          .dropbtn {
        background-color: #f9b206;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        }

        .dropdown {
        position: relative;
        display: inline-block;
        }

        .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        }

        .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        }

        .dropdown-content a:hover {background-color: #ddd;}

        .dropdown:hover .dropdown-content {display: block;}

        .dropdown:hover .dropbtn {background-color: #eaa806;}
        .header_side {
        background: #ffffff!important;
        }
        .logo2{
        width:270px;
        }
        .footer {
        padding-top: 0px;
        }
        .btn-secondary2 {
        color: #fff;
        background-color: #0082c9;
        border-color: #e61686;
        }

        .main_nav_item a:hover {
        color: #e7228c!important;
        }
        .main_nav_item {
        margin-right: 1px!important;
        }
        @media only screen and (max-width: 700px) {
        .logo img {
        width: 178px!important;
        }

        .header {
        height: 60px;
        top: 0px!important;
        }
        .main22 {
          display: flex;
          flex-direction: column-reverse;
        }
        }
</style>
</head>
<body>


@include('school.layouts.header')
@yield('content')
@include('school.layouts.footer')






<script src="{{asset('admin-assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="asset('admin-assets/styles/bootstrap4/popper.js')}}"></script>
<script src="asset('admin-assets/styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="asset('admin-assets/plugins/greensock/TweenMax.min.js')}}"></script>
<script src="asset('admin-assets/plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="asset('admin-assets/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="asset('admin-assets/plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="asset('admin-assets/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="asset('admin-assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="asset('admin-assets/plugins/scrollTo/jquery.scrollTo.min.js')}}"></script>
<script src="asset('admin-assets/plugins/easing/easing.js')}}"></script>
<script src="asset('admin-assets/js/custom.js')}}"></script>

</body>
</html>