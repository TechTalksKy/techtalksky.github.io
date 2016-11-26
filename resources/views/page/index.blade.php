@extends('layouts.page')

@section('title', 'Home | Tech Talks KY')

@section('body_classes')

@section('content')

<div class="row">

    @include('partials.sidebar')
    <section class="col-md-7 col-sm-12 col-md-offset-5 main-content">

        <div class="home-page-posts animated fadeIn ">

            @foreach ($posts as $post)
                @include("partials.post-{$post->type}", ['post'=> $post]);
            @endforeach
            
        </div><!-- Home page posts -->

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
