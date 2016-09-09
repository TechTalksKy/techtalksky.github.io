@extends('layouts.blog')

@section('title', 'First Meetup | Tech Talks Ky')

@section('body_classes')

@section('header')
    <header class="hero-image" role="banner" style="background-image: url(img/postCover.png);">

        <span class="menu-trigger animated fadeInDown">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </span>


        @include('partials.nav')
    </header>
@stop

@section('content')
    <br><br><br>

<div class="row">
    <div class="col-xs-12 single-content">
        

        <h1>Dave Hempy | Ruby on Rails</h1>

        <p class="subtitle">September 14, 2016 @ 6pm @ <a href="http://www.plantory.org/">Plantory</a></p>

        <p>Learn about the MVC architecture with examples from the Rails framework written in the Ruby programming language from speaker Dave Hempy.</p>

        <p>Dave has been programming for years, and loves open source stacks. And most recently participated in RedBull's Flugtag in Louisville. Dave also helps run the <a href="http://www.kre8now.com/">Kre8now Makerspace</a>.</p>
        
        <p><iframe width="560" height="315" src="https://www.youtube.com/embed/WDH8gso2yh4" frameborder="0" allowfullscreen></iframe>
        </p>
        @include('partials.smallFooter')
    </div><!-- main-content/col -->
</div>
@stop
