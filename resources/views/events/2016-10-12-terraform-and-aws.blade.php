@extends('layouts.blog')

@section('title', 'Christoper Davis - Terraform and AWS | Tech Talks Ky')

@section('body_classes')

@section('header')
    <header class="hero-image" role="banner" style="background: url('http://pre02.deviantart.net/41ba/th/pre/i/2012/241/0/4/fallout_terminal_texture_by_team_machine-d5cubxx.jpg'); background-repeat: none; background-size: cover">

        <div class="title">Christopher Davis</div>
        <div class="subtitle">Terraform & AWS</div>
        <div class="date">Oct 12, 2016 @ 6pm @ Plantory </div>

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
        

        <h1>Christopher Davis | Terraform and AWS</h1>

        <p class="subtitle">October 12, 2016 @ 6pm @ <a href="http://www.plantory.org/">Plantory</a></p>

        <p><a href="https://www.facebook.com/events/605156676321055/" target="_blank">Event Info</a></p>
        <p>
            Explore the benefits of describing your infrastructure as code. We'll build a small application using <a href=
            "https://www.terraform.io/">Terraform</a> and AWS's <a href="https://aws.amazon.com/ecs/">container service</a>.
        </p>

        <p>
            <a href="http://christopherdavis.me/">Christopher Davis</a> has been building web things for eight years. A classical musician by training, Chris came to the software world via WordPress and is currently a lead developer at <a href="https://www.pmg.com/">PMG</a> where he builds internal advertising tools and deals with a lot of bigger than excel data. Find him around the web <a href="http://twitter.com/chrisguitarguy/">@chrisguitarguy</a>.
        </p>
        
        @include('partials.smallFooter')
    </div><!-- main-content/col -->
</div>
@stop
