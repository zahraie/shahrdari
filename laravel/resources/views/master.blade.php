<!DOCTYPE html>
<html lang="fa">
<head>
    <!-- Main -->
    <meta charset="UTF-8">
    <title>{{"شهرداری ازندریان"}} - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @if(App::isLocal())
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-theme.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-rtl.min.css') }}">
    @else
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    @endif
    <link rel="stylesheet" href="{{ asset('assets/css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/master.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/menu.css') }}">
    <link rel="icon" href="{{ asset('assets/favicon.ico') }}">
    @yield('head')
    <!-- SEO -->
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <link rel="author" href="https://plus.google.com/106945145782595448252">
    <link rel="publisher" href="https://google.com/+GooglePlusPage">
    <!-- GooglePlus -->
    <meta itemprop="name" content="{{ 'شهرداری ازندریان ' }} - @yield('title')">
    <meta itemprop="description" content="@yield('description')">
    <meta itemprop="image" content="{{ asset('assets/img/logo.png') }}"
    <meta property="og:url" content="{{ Request::url() }}">>
    <!-- Facebook -->
    <meta property="og:image" content="{{ asset('assets/img/logo.png') }}">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:title" content="{{ 'شهرداری ازندریان' }} - @yield('title')">
    <meta property="og:site_name" content=" - فروشگاه اینترنتی">
    <meta property="og:see_also" content="{{ Request::url() }}">
    <!-- Twitter -->
    <meta name="twitter:card" content="@yield('description')">
    <meta name="twitter:url" content="{{ Request::url() }}">
    <meta name="twitter:title" content="{{ 'شهرداری ازندریان'}} - @yield('title')">
    <meta name="twitter:description" content="@yield('description')">
    <meta name="twitter:image" content="{{ asset('assets/img/logo.png') }}">
    <!-- JS Bridges -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="url" content="{{ Request::url() }}">
    <!--End-->
</head>
-->
<body>

<!-- Nav -->
<nav class="navigator navbar-fixed-top" role="navigation">
    <div  class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a  class="navbar-brand" href="#">
                <img src="assets/img/5.png" style="border-radius: 15px" >
                <a class="logo" style="margin-left: 200px" href="{{url('/')}}"> سایت شهرداری </a><br>
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <form method="post" action="{{url('/search')}}" class="navbar-form navbar-left">
                <div class="form-group">
                    <input name="search-name" type="text" class="form-control" placeholder="جستجو">
                </div>
                <input hidden name="_token" value="{{csrf_token()}}">
                <input type="submit" class="btn btn-info" value="جستجو">

            </form><br><br><br><br>


            <ul   class="nav navbar-nav"  id="main-menu">
                <li ><a onchange="location = this.value ;" class="header" href="{{url('/')}}">صفحه اصلی <span class="sr-only">(current)</span></a></li>
                <li ><a onchange="location = this.value ;" class="header" href="{{url('/')}}">درباره ی شهرداری<span class="sr-only">(current)</span></a>
                    <ul >
                    <li><a onchange="location = this.value ;" class="header" href="{{url('/mayor/history')}}">تاریخچه ی شهرداری<span class="sr-only">(current)</span></a></li>
                    <li><a onchange="location = this.value ;" class="header" href="{{url('/mayor/rule')}}">قوانین و مقررات<span class="sr-only">(current)</span></a></li>
                    <li><a onchange="location = this.value ;" class="header" href="{{url('/mayor/chart')}}">نمودار سازمانی <span class="sr-only">(current)</span></a></li>
                    <li><a onchange="location = this.value ;" class="header" href="{{url('/mayor/welfare')}}"> امور رفاهی <span class="sr-only">(current)</span></a></li>
                    <li><a onchange="location = this.value ;" class="header" href="{{url('/mayor/organization')}}">سازمانها <span class="sr-only">(current)</span></a></li>
                    <li><a onchange="location = this.value ;" class="header" href="{{url('/mayor/documentation')}}">مستندات  <span class="sr-only">(current)</span></a></li>
                    </ul>
                </li>
                <li ><a onchange="location = this.value ;" class="header" href="{{url('/')}}">حوزه ی شهردار <span class="sr-only">(current)</span></a>
                    <ul >
                        <li><a onchange="location = this.value ;" class="header" href="{{url('/scope/council')}}">اداره ی حوزه شهردار و امور شورای اسلامی <span class="sr-only">(current)</span></a></li>
                        <li><a onchange="location = this.value ;" class="header" href="{{url('/scope/protection')}}">اداره حراست<span class="sr-only">(current)</span></a></li>
                        <li><a onchange="location = this.value ;" class="header" href="{{url('/scope/law')}}">اداره ی حقوقی<span class="sr-only">(current)</span></a></li>
                        <li><a onchange="location = this.value ;" class="header" href="{{url('/scope/inspect')}}">اداره ی بازرسی<span class="sr-only">(current)</span></a></li>
                        <li><a onchange="location = this.value ;" class="header" href="{{url('/scope/communication')}}">اداره ارتباطات و بین الملل<span class="sr-only">(current)</span></a></li>
                    </ul>
                </li>
                <li><a class="header" href="{{url('/contact')}}">ارتباط با ما</a></li>
                <li ><a class="header" href="{{url('/management')}}">سامانه ی درخواست های شهردار<span class="sr-only">(current)</span></a></li>
                <li><a class="header">...</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<section class="container">
    <main class="col-md-9 container-fluid main">
        @yield('main')
    </main>
    <main class="col-md-3 container-fluid main">
        @yield('sidebar')
    </main>
</section>

<footer class="footer navbar-fixed-bottom">
    <div class="container">
        <div class="col-md-6 center-xs center-sm">
            <span>کلیه ی حقوق این سایت متعلق به اداره ی فناوری اطلاعات و ارتباطات شهر ازندریان میباشد . </span>
        </div>
        <hr class="hidden-md hidden-lg">
        <div class="col-md-6 text-left center-xs center-sm">

            <span class="hidden-xs"></span>
            <a href="{{url('/guide')}}">راهنما</a>
            <span>|</span>
            <a href="{{url('/publicity')}}">تبلیغات</a>
            <span>|</span>
            <a href="{{url('/mayor/rule')}}">قوانین</a>
            <span>|</span>
            <a href="{{url('/about')}}">درباره</a>
            <span>|</span>
            <a href="{{url('/contact')}}">ارتباط</a>
        </div>
    </div>
</footer>
<!-- The End -->
</body>
<!-- Scripts -->
@if(App::isLocal())
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/angular.js') }}"></script>
    <script src="{{ asset('assets/js/angular-locale_fa-ir.js') }}"></script>
@else
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.3/angular.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.3/i18n/angular-locale_fa-ir.js"></script>
@endif
<script src="{{ asset('assets/js/auth/auth.js') }}"></script>
@yield('scripts')
</html>