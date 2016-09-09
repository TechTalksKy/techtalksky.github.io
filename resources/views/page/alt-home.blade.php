@extends('layouts.page')

@section('title', 'Writer Theme | Home')

@section('body_classes', 'alt-home')

@section('content')

<div class="row">

                @include('partials.nav')

                <section class="sidebar col-md-6 col-sm-12"><span class="menu-trigger animated fadeInDown">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </span>

                    <div class="sub-nav">
                        <a href="{{ URL::to('#') }}"> Latest Posts</a>
                    </div>

                    <div class=" animated fadeIn ">

                        <article class="post"><div class="post-preview col-xs-10  no-gutter">
                                <h2><a href="{{ URL::to('post.html') }}">A great story never told</a></h2>

                                <p class="meta">
                                    <a href="{{ URL::to('author.html') }}">James Reddy</a> in <a href="{{ URL::to('category.html') }}">Storytime</a>
                                </p>
                            </div>


                        </article><article class="post"><div class="post-preview col-xs-10 no-gutter">
                                <h2><a href="{{ URL::to('post.html') }}">Builing, Hacking, Creating</a></h2>

                                <p class="meta">
                                    <a href="{{ URL::to('author.html') }}">Mad Hacker</a> in <a href="{{ URL::to('category.html') }}">Easy Living</a>
                                </p>
                            </div>

                        </article><article class="post"><div class="post-preview col-xs-10 no-gutter">
                                <h2><a href="{{ URL::to('post.html') }}">Ten reasons why you should travel, or why the city is killing your inner creative</a></h2>

                                <p class="meta">
                                    <a href="{{ URL::to('author.html') }}">Sarah Smith</a> in <a href="{{ URL::to('category.html') }}">Adventure</a>
                                </p>
                            </div>

                        </article><article class="post"><div class="post-preview col-xs-10 no-gutter">
                                <h2><a href="{{ URL::to('post.html') }}">Feature List</a></h2>

                                <p class="meta">
                                    <a href="{{ URL::to('author.html') }}">Jane Thompson</a> in <a href="{{ URL::to('category.html') }}">Writer</a></p>
                            </div>


                        </article><article class="post"><div class="post-preview col-xs-10 no-gutter">
                                <h2><a href="{{ URL::to('post.html') }}">About Writer</a></h2>

                                <p class="meta">
                                    <a href="{{ URL::to('author.html') }}">John Smith</a> in <a href="{{ URL::to('category.html') }}">Writer</a>
                                </p>
                            </div>

                        </article><article class="post"><div class="post-preview col-xs-10 no-gutter">
                                <h2><a href="{{ URL::to('components.html') }}">Bootstrap Components</a></h2>

                                <p class="meta">
                                    <a href="{{ URL::to('author.html') }}">Jane Doe</a> in <a href="{{ URL::to('category.html') }}">Writer</a>
                                </p>
                            </div>

                        </article><article class="post"><div class="post-preview col-xs-10 no-gutter">
                                <h2><a href="{{ URL::to('post.html') }}">Its not always that simple</a></h2>

                                <p class="meta">
                                    <a href="{{ URL::to('author.html') }}">Tim Leen</a> in <a href="{{ URL::to('category.html') }}">Open Roads</a>
                                </p>
                            </div>

                        </article></div><!-- Home page posts -->

                </section><!-- end sidebar --><section class="col-md-6 col-sm-12 col-md-offset-6 alt-main"><div class="sub-nav">
                        <a href="{{ URL::to('#') }}">Categories</a>
                    </div>



                    <div class="home-page-categories animated fadeIn ">
                        <div class="category row">
                            <section><div class="category-preview col-xs-6 col-sm-4 ">
                                    <h2>Easy Living</h2>
                                    <a href="{{ URL::to('category.html') }}"><img src="{{ URL::to('img/cover-2.jpg') }}" alt="category-image"></a>
                                </div>

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

                                <div class="category-preview col-xs-6 col-sm-4 ">
                                    <h2>Gaming</h2>
                                    <a href="{{ URL::to('category.html') }}"><img src="{{ URL::to('img/cover-1.jpg') }}" alt="category-image"></a>
                                </div>

                                <div class="category-preview col-xs-6 col-sm-4 ">
                                    <h2>City Life</h2>
                                     <a href="{{ URL::to('category.html') }}"><img src="{{ URL::to('img/cover-3.jpg') }}" alt="category-image"></a>
                                </div>

                                <div class="category-preview col-xs-6 col-sm-4 ">
                                    <h2>Rave Culture</h2>
                                     <a href="{{ URL::to('category.html') }}"><img src="{{ URL::to('img/cover-5.jpg') }}" alt="category-image"></a>
                                </div>

                                <div class="category-preview col-xs-6 col-sm-4 ">
                                    <h2>Photography</h2>
                                    <a href="{{ URL::to('category.html') }}"><img src="{{ URL::to('img/cover-7.jpg') }}" alt="category-image"></a>
                                </div>

                                <div class="category-preview col-xs-6 col-sm-4 ">
                                    <h2>Animal Kingdom</h2>
                                     <a href="{{ URL::to('category.html') }}"><img src="{{ URL::to('img/cover-8.jpg') }}" alt="category-image"></a>
                                </div>

                                <div class="category-preview col-xs-6 col-sm-4 ">
                                    <h2>Beach</h2>
                                    <a href="{{ URL::to('category.html') }}"><img src="{{ URL::to('img/cover-10.jpg') }}" alt="category-image"></a>
                                </div>

                                <div class="category-preview col-xs-6 col-sm-4 ">
                                    <h2>Climbing</h2>
                                     <a href="{{ URL::to('category.html') }}"><img src="{{ URL::to('img/cover-11.jpg') }}" alt="category-image"></a>
                                </div>

                                <div class="category-preview col-xs-6 col-sm-4 ">
                                    <h2>Mystery</h2>
                                     <a href="{{ URL::to('category.html') }}"><img src="{{ URL::to('img/cover-12.jpg') }}" alt="category-image"></a>
                                </div>

                            </section></div>
                    </div>
                    <footer class="split-footer"><a href="{{ URL::to('page.html') }}">About</a>
                        <i class="link-spacer"></i>
                        <a href="{{ URL::to('page.html') }}">Writer 2015</a>
                    </footer></section><!-- main content --></div>
@stop
