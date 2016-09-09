@extends('layouts.page')

@section('title', 'Writer Theme | Home')

@section('body_classes')

@section('content')

<div class="row">

                <div id="menu-target">
                    <ul><li><i class="fa fa-home"></i><a href="{{ URL::to('page.index') }}">Home</a></li>
                        <li><i class="fa fa-user"></i><a href="{{ URL::to('author') }}">John Smith</a></li>
                        <li><i class="fa fa-anchor"></i><a href="{{ URL::to('page') }}">About</a></li>
                        <li><i class="fa fa-star"></i><a href="{{ URL::to('favorites') }}">Favorites</a></li>
                        <li><i class="fa fa-paper-plane"></i><a href="{{ URL::to('contact') }}">Contact</a></li>
                    </ul><hr><ul><li><i class="fa fa-file"></i><a href="{{ URL::to('post') }}">Post Page</a></li>
                        <li><i class="fa fa-file"></i><a href="{{ URL::to('page.post-sidebar') }}">Post with Sidebar</a></li>

                        <li><i class="fa fa-home"></i><a href="{{ URL::to('alt-home') }}">Alternate Home</a></li>
                        <li><i class="fa fa-image"></i><a href="{{ URL::to('category') }}">Category Page</a></li>
                    </ul></div>

                <section class="sidebar col-md-5 col-sm-12" style="background-image: url(img/default-sidebar.jpg"><span class="menu-trigger animated fadeInDown">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </span>

                    <div class="site-info">
                        <div class="primary-info">
                            <img width="396" height="177" src={{asset('img/tech_talks_website_logo.png')}} alt="">
                            <p>Welcome to Tech Talks KY!  A fun monthly event to talk about software and networking with other devs!</p>
                        </div>
                        <div class="secondary-info">
                            <p>
                                <a class="btn btn-primary" targt="_blank" href="{{ URL::to('https://wes37.typeform.com/to/JF00Dd') }}"><i class="fa fa-user-plus"></i>Join Our Slack Community</a>
                            </p>
                        </div>
                    </div>
                </section><!-- end sidebar --><section class="col-md-7 col-sm-12 col-md-offset-5 main-content">

                    <div class="home-page-posts animated fadeIn ">

                        <article class="post"><div class="post-preview col-xs-10  no-gutter">
                                <h2><a href="{{ URL::to('post') }}">A great story never told</a></h2>

                                <p>It was a cold December morning, as I sat out on my porch I decided today was the day. </p>

                                <p class="meta">
                                    <a href="{{ URL::to('author') }}">James Reddy</a> in <a href="{{ URL::to('category.html') }}">Storytime</a> <i class="link-spacer"></i> <i class="fa fa-bookmark"></i> 23 minute read
                                </p>
                            </div>

                            <div class=" col-xs-2  no-gutter">
                                <img src="{{ URL::to('img/profile-1.jpg') }}" class="user-icon" alt="user-image"></div>
                        </article></div><!-- Home page posts -->

                    <div class="home-page-categories hide animated fadeIn ">
                        <div class="category row">
                            <section><div class="category-preview col-xs-6 col-sm-4 ">
                                    <h2>Easy Living</h2>
                                    <a href="{{ URL::to('category') }}"><img src="{{ URL::to('img/cover-2.jpg') }}" alt="category-image"></a>
                                </div>

                                <div class="category-preview col-xs-6 col-sm-4 ">
                                    <h2>Adventure</h2>
                                    <a href="{{ URL::to('category') }}"><img src="{{ URL::to('img/cover-4.jpg') }}" alt="category-image"></a>
                                </div>

                                <div class="category-preview col-xs-6 col-sm-4 ">
                                    <h2>Storytime</h2>
                                    <a href="{{ URL::to('category') }}"><img src="{{ URL::to('img/cover-6.jpg') }}" alt="category-image"></a>
                                </div>

                                <div class="category-preview col-xs-6 col-sm-4 ">
                                    <h2>Open Roads</h2>
                                     <a href="{{ URL::to('category') }}"><img src="{{ URL::to('img/cover-9.jpg') }}" alt="category-image"></a>
                                </div>

                                <div class="category-preview col-xs-6 col-sm-4 ">
                                    <h2>Gaming</h2>
                                    <a href="{{ URL::to('category') }}"><img src="{{ URL::to('img/cover-1.jpg') }}" alt="category-image"></a>
                                </div>

                                <div class="category-preview col-xs-6 col-sm-4 ">
                                    <h2>City Life</h2>
                                     <a href="{{ URL::to('category.html') }}"><img src="{{ URL::to('img/cover-3.jpg') }}" alt="category-image"></a>
                                </div>

                                <div class="category-preview col-xs-6 col-sm-4 ">
                                    <h2>Rave Culture</h2>
                                     <a href="{{ URL::to('category') }}"><img src="{{ URL::to('img/cover-5.jpg') }}" alt="category-image"></a>
                                </div>

                                <div class="category-preview col-xs-6 col-sm-4 ">
                                    <h2>Photography</h2>
                                    <a href="{{ URL::to('category') }}"><img src="{{ URL::to('img/cover-7.jpg') }}" alt="category-image"></a>
                                </div>

                                <div class="category-preview col-xs-6 col-sm-4 ">
                                    <h2>Animal Kingdom</h2>
                                     <a href="{{ URL::to('category') }}"><img src="{{ URL::to('img/cover-8.jpg') }}" alt="category-image"></a>
                                </div>

                                <div class="category-preview col-xs-6 col-sm-4 ">
                                    <h2>Beach</h2>
                                    <a href="{{ URL::to('category') }}"><img src="{{ URL::to('img/cover-10.jpg') }}" alt="category-image"></a>
                                </div>

                                <div class="category-preview col-xs-6 col-sm-4 ">
                                    <h2>Climbing</h2>
                                     <a href="{{ URL::to('category') }}"><img src="{{ URL::to('img/cover-11.jpg') }}" alt="category-image"></a>
                                </div>

                                <div class="category-preview col-xs-6 col-sm-4 ">
                                    <h2>Mystery</h2>
                                     <a href="{{ URL::to('category') }}"><img src="{{ URL::to('img/cover-12.jpg') }}" alt="category-image"></a>
                                </div>

                            </section></div>
                    </div>
                    <footer class="split-footer"><a href="{{ URL::to('post') }}">About</a>
                        <i class="link-spacer"></i>
                        <a href="{{ URL::to('post') }}">Writer 2015</a>
                    </footer></section><!-- main content --></div>
@stop
