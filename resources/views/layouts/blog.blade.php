<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>@yield('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="{{ URL::to('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::to('css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ URL::to('css/main.css') }}">
        <link rel="stylesheet" href="{{ URL::to('css/customizations.css') }}">

        <!--[if lt IE 9]>
            <script src="{{ URL::to('/js/vendor/html5shiv.min.js') }}"></script>
        <![endif]-->

        <script src="{{ URL::to('js/vendor/modernizr.custom.32229-2.8-respondjs-1-4-2.js') }}"></script>
    @yield('styles')
</head>
    <body class="@yield('body_classes')">
        @yield('header') 
        <main class="container">

            @yield('content')

        </main> <!-- /container -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="{{ URL::to('js/vendor/jquery-1.11.2.min.js') }}"><\/script>')</script>

        <script src="{{ URL::to('js/vendor/jquery.jpanelmenu.min.js') }}"></script>
        <script src="{{ URL::to('js/vendor/bootstrap.min.js') }}"></script>
        <script src="{{ URL::to('js/vendor/fastclick.min.js') }}"></script>

        <script src="{{ URL::to('js/main.js') }}"></script>
    @yield('scripts')
</body>
</html>
