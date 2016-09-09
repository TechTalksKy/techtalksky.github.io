@extends('layouts.page')

@section('title', 'Writer Theme | Author')

@section('body_classes')

@section('content')

<div class="row">

               @include('partials.nav')


                <section class="sidebar col-md-5 col-sm-12" style="background-image: url(img/default-author.jpg)"><span class="menu-trigger animated fadeInDown">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </span>

                    <div class="site-info">
                        <div class="primary-info">
                        <h1>Michelle Jones</h1>
                            <p>Just a friendly writer, busy typing away to feed hungry eyes. </p>
                        </div>
                        <div class="secondary-info">

                            <p><a class="btn btn-default" href="{{ URL::to('contact.html') }}"><i class="fa fa-paper-plane"></i>Contact Us</a>
                        </p></div>
                    </div>

                </section><div class="col-md-7 col-sm-12 col-md-offset-5 main-content">

                    <div class="author-bio">

                        <img src="{{ URL::to('img/author.jpg') }}"><div class="author-bio__info">
                            <h1>Michelle Jones</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis necessitatibus repellat et similique, assumenda dolor possimus sunt repellendus ratione quas nihil expedita maiores, ex id odio molestiae ipsam officiis magni!</p>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis necessitatibus repellat et similique, assumenda dolor possimus sunt repellendus ratione quas nihil expedita maiores, ex id odio molestiae ipsam officiis magni!</p>
                        </div>
                    </div>
                    <p>

                    </p><h2 class="favorites">Most recommended posts</h2>

                    <div class="posts-block animated fadeIn ">

                        <article class="post author-page"><div class="post-preview col-xs-10  no-gutter">
                                <h2><a href="{{ URL::to('post.html') }}">8 Reasons to quit your day job</a></h2>

                                <p>It was a cold December morning, as I sat out on my porch I decided today was the day. </p>

                            </div>

                            <div class="col-sm-3 col-md-1 col-md-offset-1 hidden-sm hidden-xs no-gutter">
                                <p class="meta">
                                    <span class="time"><i class="fa fa-bookmark"></i> 12</span>
                                    <span class="min">minutes</span>
                                </p>
                            </div>
                        </article><article class="post author-page"><div class="post-preview col-xs-10  no-gutter">
                                <h2><a href="{{ URL::to('post.html') }}">The Best thing about cold showers</a></h2>

                                <p>Would you give up your warm shower for an icy one? </p>

                            </div>

                            <div class="col-sm-3 col-md-1 col-md-offset-1 hidden-sm hidden-xs no-gutter">
                                <p class="meta author-page">
                                    <span class="time"><i class="fa fa-bookmark"></i> 19</span>
                                    <span class="min">minutes</span>
                                </p>
                            </div>
                        </article><article class="post author-page"><div class="post-preview col-xs-10  no-gutter">
                                <h2><a href="{{ URL::to('post.html') }}">A great story never told</a></h2>

                                <p>It was a cold December morning, as I sat out on my porch I decided today was the day. </p>

                            </div>

                            <div class="col-sm-3 col-md-1 col-md-offset-1 hidden-sm hidden-xs no-gutter">
                                <p class="meta author-page">
                                    <span class="time"><i class="fa fa-bookmark"></i> 9</span>
                                    <span class="min">minutes</span>
                                </p>
                            </div>
                        </article><div class="view-all-by-author">
                            <a href="{{ URL::to('index.html') }}">View All Post by Michelle <i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>

                    <footer class="split-footer"><a href="{{ URL::to('page.html') }}">About</a>
                        <i class="link-spacer"></i>
                        <a href="{{ URL::to('page.html') }}">Writer 2015</a>
                    </footer></div><!-- main content -->
            </div>
@stop
