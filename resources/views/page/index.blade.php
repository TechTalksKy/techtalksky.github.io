@extends('layouts.page')

@section('title', 'Home | Tech Talks KY')

@section('body_classes')

@section('content')

<div class="row">

    @include('partials.sidebar')
    <section class="col-md-7 col-sm-12 col-md-offset-5 main-content">

        <div class="home-page-posts animated fadeIn ">

            <article class="post"><div class="post-preview col-xs-10  no-gutter">
                    <p class="meta">
                        <a href="{{ URL::to('about') }}">Wed October 12, 2016 @ 6pm</a> - Lexington
                    </p>
                    <h2><a href="{{ URL::to('event/2016-10-12-Terraform-and-aws') }}">Deploying Application with Terraform & AWS Container Service</a></h2>
                    
                    <p>
                        Christopher Davis will be talking about Terraform and AWS, describing your infrastructure as code.
                    </p>
                    <p class="meta">
                        <a href="{{ URL::to('about') }}">Tech Talks Ky</a>
                    </p>
                </div>

                <div class=" col-xs-2  no-gutter">
                    <img src="http://christopherdavis.me/images/christopher-davis.png" class="user-icon" alt="user-image"></div>
            </article></div><!-- Home page posts -->

            <article class="post">
                <div class="post-preview col-xs-10  no-gutter">
                    <h2><a href="/talk/dave-hempy"><i class="fa fa-video-camera"></i> Dave Hempy talk on MVC now online</a></h2>
                    <p>Dave's talk from September can now be watched here: <a href="/talk/dave-hempy">MVC Architecture</a></p>
                </div>
            </article>

            <article class="post"><div class="post-preview col-xs-10  no-gutter">
                    <h2><a href="{{ URL::to('first-meetup') }}">First Meetup!! Wednesday September 14, 2016 @ 6pm</a></h2>

                    <p>Come listen to Dave Hempy talk about <a href="http://rubyonrails.org/">Ruby on Rails</a>. Expect a good introduction to the MVC architecture and the Ruby programming language. </p>

                    <p class="meta">
                        <a href="{{ URL::to('about') }}">Tech Talks Ky</a>
                    </p>
                </div>

                <div class=" col-xs-2  no-gutter">
                    <img src="http://www.redbullflugtag.com/usa-louisville/wp-content/uploads/sites/17/2016/06/David-H-532x398.jpeg" class="user-icon" alt="user-image"></div>
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
        <footer class="split-footer"><a href="{{ URL::to('about') }}">About</a>
            
            
        </footer>
    </section><!-- main content -->
</div>
@stop
