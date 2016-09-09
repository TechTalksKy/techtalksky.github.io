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

        <!--[if lt IE 9]>
            <script src="{{ URL::to('/js/vendor/html5shiv.min.js') }}"></script>
        <![endif]-->

        <script src="{{ URL::to('js/vendor/modernizr.custom.32229-2.8-respondjs-1-4-2.js') }}"></script>
    @yield('styles')
</head>
    <body class="@yield('body_classes')">
        <!-- if the user has javascript disabled they can still use the menu -->
        <noscript>
            <div class="no-js-menu">
                <ul>
                    <li><i class="fa fa-home"></i><a href="{{ URL::to('index.html') }}">Home</a></li>
                    <li><i class="fa fa-user"></i><a href="{{ URL::to('author.html') }}">John Smith</a></li>
                    <li><i class="fa fa-anchor"></i><a href="{{ URL::to('page.html') }}">About</a></li>
                    <li><i class="fa fa-star"></i><a href="{{ URL::to('favorites.html') }}">Favorites</a></li>
                    <li><i class="fa fa-paper-plane"></i><a href="{{ URL::to('contact.html') }}">Contact</a></li>
                    <li><i class="fa fa-file"></i><a href="{{ URL::to('post.html') }}">Post Page</a></li>
                    <li><i class="fa fa-file"></i><a href="{{ URL::to('post-sidebar.html') }}">Post with Sidebar</a></li>
                    <li><i class="fa fa-home"></i><a href="{{ URL::to('alt-home.html') }}">Alternate Home</a></li>
                    <li><i class="fa fa-image"></i><a href="{{ URL::to('category.html') }}">Category Page</a></li>
                </ul>
            </div>
        </noscript>
        <!-- end no script -->

        <main class="container left-container">
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
