<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>I M S :: PTPN IX</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="{{ asset('Login_v5/images/logo-icon.png') }}"/>
    <link rel="stylesheet" href="{{ asset('menu/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('menu/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('menu/css/meanmenu/meanmenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('menu/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('menu/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('menu/css/notika-custom-icon.css') }}">
    <link rel="stylesheet" href="{{ asset('menu/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('menu/style.css') }}">
    <link rel="stylesheet" href="{{ asset('menu/css/responsive.css') }}">
</head>
<body>

<div class="header-top-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="logo-area">
                    <a href="{{ route('home') }}"><img src="{{ asset('Login_v5/images/back.png') }}" width="120" alt="" /></a>
                    {{-- <a href="{{ route('home') }}">KEMBALI</a> --}}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="main-menu-area mg-tb-40">

</div>

@yield('content')

<div class="footer-copyright-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="footer-copy-right">
                    <p>Copyright © 2020
                    <a href="#">PTPN IX</a>. Integrated Management System</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('menu/js/vendor/modernizr-2.8.3.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('menu/js/vendor/jquery-1.12.4.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('menu/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('menu/js/wow.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('menu/js/wizard/jquery.bootstrap.wizard.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('menu/js/wizard/wizard-active.js') }}" type="text/javascript"></script>
<script src="{{ asset('menu/js/plugins.js') }}" type="text/javascript"></script>
<script src="{{ asset('menu/js/main.js') }}" type="text/javascript"></script>
<script src="{{ asset('menu/js/rocket-loader.min.js') }}"></script>
@yield('script')
</body>
</html>
