@extends('layouts.page')

@section('title', 'Writer Theme | Favorites')

@section('body_classes')

@section('content')

<div class="row">

                <div id="menu-target">
                    <ul><li><i class="fa fa-home"></i><a href="{{ URL::to('index.html') }}">Home</a></li>
                        <li><i class="fa fa-user"></i><a href="{{ URL::to('author.html') }}">John Smith</a></li>
                        <li><i class="fa fa-anchor"></i><a href="{{ URL::to('page.html') }}">About</a></li>
                        <li><i class="fa fa-star"></i><a href="{{ URL::to('favorites.html') }}">Favorites</a></li>
                        <li><i class="fa fa-paper-plane"></i><a href="{{ URL::to('contact.html') }}">Contact</a></li>
                    </ul><hr><ul><li><i class="fa fa-file"></i><a href="{{ URL::to('post.html') }}">Post Page</a></li>
                        <li><i class="fa fa-file"></i><a href="{{ URL::to('post-sidebar.html') }}">Post with Sidebar</a></li>

                        <li><i class="fa fa-home"></i><a href="{{ URL::to('alt-home.html') }}">Alternate Home</a></li>
                        <li><i class="fa fa-image"></i><a href="{{ URL::to('category.html') }}">Category Page</a></li>
                    </ul></div>

                <section class="sidebar col-md-5 col-sm-12" style="background-image: url(img/default-favorites-sidebar.jpg)"><span class="menu-trigger animated fadeInDown">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </span>

                    <div class="site-info">
                        <div class="primary-info">
                        <h1>Writer</h1>
                            <p>A minimal blogging theme to put your content on show. <a href="{{ URL::to('post.html') }}">Look at the features.</a> </p>

                            <p>Content is king</p>
                        </div>
                        <div class="secondary-info">

                            <p><a class="btn btn-primary" href="{{ URL::to('#') }}"><i class="fa fa-user-plus"></i>Newsletter Signup</a>
                        </p></div>
                    </div>

                </section><div class="col-md-7 col-sm-12 col-md-offset-5 main-content">
                    <section class="row"><div class="col-sm-12">
                            <h2 class="favorites">Favorite posts</h2>
                        </div>

                        <article class="post-favorite col-xs-12 col-sm-6 "><h2><a href="{{ URL::to('post.html') }}">About Writer</a></h2>
                            <p>Not another bootstrap theme </p>
                        </article><article class="post-favorite col-xs-12 col-sm-6"><h2><a href="{{ URL::to('post.html') }}">Its not always that simple</a></h2>
                            <p>How many times should you ask the same questions. </p>
                        </article><article class="post-favorite col-xs-12 col-sm-6"><h2><a href="{{ URL::to('post.html') }}">Ten reasons why you should travel, or why   the city is killing your inner creative</a></h2>
                            <p>About time for your next adventure. </p>
                        </article><article class="post-favorite col-xs-12 col-sm-6"><h2><a href="{{ URL::to('post.html') }}">Feature List</a></h2>
                            <p>Wondering what is actually included? </p>
                        </article></section><!-- end fav posts --><section class="row favorite-categories animated fadeIn"><div class="col-sm-12">
                            <h2 class="favorites">Favorite categories<h2>
                        </h2></h2></div>

                        <div class="category-preview col-xs-6 col-sm-4 ">
                            <h2>Adventure</h2>
                            <a href="{{ URL::to('category.html') }}"><img src="{{ URL::to('img/cover-4.jpg') }}" alt="category-image"></a>
                        </div>

                        <div class="category-preview col-xs-6 col-sm-4 ">
                            <h2>Storytime</h2>
                            <a href="{{ URL::to('category.html') }}"><img src="{{ URL::to('img/cover-6.jpg') }}" alt="category-image"></a>
                        </div>

                        <div class="category-preview col-xs-6 col-sm-4 ">
                            <h2>Open Roads</h2>
                             <a href="{{ URL::to('category.html') }}"><img src="{{ URL::to('img/cover-9.jpg') }}" alt="category-image"></a>
                        </div>
                    </section><footer class="split-footer"><a href="{{ URL::to('page.html') }}">About</a>
                        <i class="link-spacer"></i>
                        <a href="{{ URL::to('page.html') }}">Writer 2015</a>
                    </footer></div><!-- main content -->
            </div>
@stop
