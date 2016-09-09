@extends('layouts.page')

@section('title', 'Writer Theme | Category')

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

            <section class="sidebar category-sidebar col-md-5 col-sm-12" style="background-image: url(img/default-category-sidebar.jpg);"><span class="menu-trigger animated fadeInDown">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </span>

                <div class="site-info">
                    <div class="primary-info">
                    <h1>Storytime</h1>
                        <p>A place to share stories, welcome to the campfire.</p>
                    </div>
                </div>

            </section><section class="col-md-7 col-sm-12 col-md-offset-5 main-content"><div class="sub-nav">
                    <a href="{{ URL::to('#') }}" class="select-posts active">Posts</a>
                </div>

                <div class="category-page-posts animated fadeIn ">
                    <article class="post"><div class="post-preview col-xs-10  no-gutter">

                        <h2><a href="{{ URL::to('post.html') }}">A great story never told</a></h2>
                        <p>It was a cold December morning, as I sat out on my porch I decided today was the day. </p>

                        <p class="meta">
                            <a href="{{ URL::to('author.html') }}">James Reddy</a> in <a href="{{ URL::to('category.html') }}">Storytime</a> <i class="link-spacer"></i> <i class="fa fa-bookmark"></i> 23 minute read
                        </p>
                        </div>

                        <div class=" col-xs-2  no-gutter">
                            <img src="{{ URL::to('img/profile-1.jpg') }}" class="user-icon user-1" alt="user-image"></div>
                    </article><article class="post"><div class="post-preview col-xs-10 no-gutter">

                        <h2><a href="{{ URL::to('post.html') }}">Ten reasons why you should travel, or why the city is killing your inner creative</a></h2>
                        <p>About time for your next adventure. </p>

                        <p class="meta">
                            <a href="{{ URL::to('author.html') }}">Sarah Smith</a> in <a href="{{ URL::to('category.html') }}">Adventure</a> <i class="link-spacer"></i> <i class="fa fa-bookmark"></i> 5 minute read
                        </p>
                        </div>

                        <div class=" col-xs-2 no-gutter">
                            <img src="{{ URL::to('img/profile-4.jpg') }}" class="user-icon user-1" alt="user-image"></div>
                    </article></div><!-- Category page posts -->
            </section><!-- main content --></div>
@stop
