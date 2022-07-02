<!DOCTYPE html>
<html lang="fa">
<head>
    <!-- Main -->
    <meta charset="UTF-8">
    <title>{{"شهرداری ازندریان  "}} - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @if(App::isLocal())
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-theme.css') }}">
    @else
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    @endif
    <link rel="stylesheet" href="{{ asset('assets/css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/auth/auth.css') }}">

    <!-- SEO -->
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <link rel="author" href="https://plus.google.com/106945145782595448252">
    <link rel="publisher" href="https://google.com/+GooglePlusPage">
    <!-- GooglePlus -->
    <meta itemprop="name" content="{{ 'شهرداری ازندریان - ' }} - @yield('title')">
    <meta itemprop="description" content="@yield('description')">
    <meta itemprop="image" content="{{ asset('assets/img/logo.png') }}">
    <!-- Facebook -->
    <meta property="og:url" content="{{ Request::url() }}">
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
<body>
    <!-- Body -->
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
                <main role="main">
                    <div class="container-fluid">
                        <header class="row">
                            <div class="col-xs-12 col-sm-3 col-sm-push-9 col-md-2 col-md-push-10 col-lg-3
                                        col-lg-push-9 text-center ">

                            </div>
                            <div >
                                <h1>@yield('title')</h1>
                                <p>@yield('slogan')</p>
                            </div>
                        </header>
                        <div class="row">
                            @yield('content')
                        </div>
                        <div class="height-15"></div>
                        <footer class="text-bg ltr">
                            <p>
                                <a href="{{ url('/') }}" data-toggle="tooltip" title="شهرداری ازندریان"><span>&copy; 2018</span></a>
                            </p>
                        </footer>
                    </div>
                </main>
            </div>
        </div>
    </div>
    <!-- Modal: Alert -->
    <div class="modal fade" id="alert" tabindex="-1" role="dialog" aria-labelledby="alert_label">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="alert_label">پیام</h4>
                </div>
                <div class="modal-body" data-ng-bind-html="alert_message | to_trusted"></div>
                <div class="modal-footer">
                    <button class="btn btn-bg" data-dismiss="modal" data-ng-click="close()">بستن</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Scripts -->
    @if(App::isLocal())
        <script src="{{ asset('assets/js/jquery.js') }}"></script>
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
</body>
</html>