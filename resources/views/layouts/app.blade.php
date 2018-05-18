<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Binary Tree</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta charset="UTF-8">
    <meta name="keywords" content="Binary Tree"/>
    <meta name="author" content="Binary Tree"/>
    <link rel="icon" type="image/png" href="{{url('assets/images/laravel.png')}}"/>
    <link href="{{ asset('assets/plugins/materialize/css/materialize.min.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('assets/fonts/icon.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/material-preloader/css/materialPreloader.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/alpha.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/jstree/dist/themes/default/style.min.css') }}" rel='stylesheet'>
    <link href="{{ asset('assets/plugins/jquery-confirm/css/jquery-confirm.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/metrojs/MetroJs.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/weather-icons-master/css/weather-icons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/select2/css/select2.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/timepicker/css/timepicker.css') }}" rel="stylesheet">
</head>
<body>
<div class="loader-bg"></div>
<div class="loader">
    <div class="preloader-wrapper big active">
        <div class="spinner-layer spinner-blue">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div>
            <div class="gap-patch">
                <div class="circle"></div>
            </div>
            <div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>
    </div>
</div>
<div class="mn-content fixed-sidebar">
    <header class="mn-header navbar-fixed">
        <nav class="cyan darken-1">
            <div class="nav-wrapper row">
                <section class="material-design-hamburger navigation-toggle">
                    <a href="#" data-activates="slide-out"
                       class="button-collapse show-on-large material-design-hamburger__icon">
                        <span class="material-design-hamburger__layer"></span>
                    </a>
                </section>
                <div class="header-title col s3">
                    <span class="chapter-title">Binary Tree</span>
                </div>
                <ul class="right col s9 m3 nav-right-menu">
                </ul>
                <ul id="dropdown1" class="dropdown-content notifications-dropdown">
                    <li class="notificatoins-dropdown-container">
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <aside id="slide-out" class="side-nav white fixed">
        <div class="side-nav-wrapper">
            <div class="sidebar-profile">
                <div id="profile">
                    <div class="sidebar-profile-image">
                            <img src="{{ asset('assets/images/profile-image.png') }}" class="circle">
                    </div>
                </div>
            </div>
            <ul class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion">
                <div class="footer">
                    <p class="copyright">Binary Tree ©</p>
                    <a href="#!">Privacidade</a> &amp; <a href="#!">Termos</a>
                </div>
            </ul>
        </div>
    </aside>
    <main class="mn-inner">
        <div class="row">
            @yield('content')
        </div>
    </main>
</div>
<div class="left-sidebar-hover"></div>
<script src="{{ asset('assets/plugins/jquery/jquery-2.2.0.min.js') }}"></script>
<script src="{{ asset('assets/plugins/materialize/js/materialize.min.js') }}"></script>
<script src="{{ asset('assets/plugins/material-preloader/js/materialPreloader.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-blockui/jquery.blockui.js') }}"></script>
<script src="{{ asset('assets/js/alpha.min.js') }}"></script>
<script src="{{ asset('assets/js/jstree/dist/jstree.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jqueryMask/jquery.mask.js') }}"></script>
<script src="{{ asset('assets/plugins/jqueryMask/jquery.mask.min.js') }}"></script>
<script src="{{ asset('assets/js/message-alert.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-confirm/js/jquery-confirm.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables.net/datatables1-10-16.min.js') }}"></script>
<script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/form-select2.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jqueryMask/jquery.maskMoney.min.js') }}"></script>
<script src="{{ asset('assets/plugins/number-format/jquery.number.min.js') }}"></script>
<script src="{{ asset('assets/plugins/timepicker/js/timepicker.js') }}"></script>
<script src="{{ asset('assets/plugins/baloon/baloon.min.js') }}"></script>
@yield('post-script')


</body>
</html>