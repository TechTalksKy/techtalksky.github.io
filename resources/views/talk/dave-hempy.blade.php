@extends('layouts.blog')

@section('title', 'Dave Hempy - MVC Architecture | Tech Talks Ky')

@section('body_classes')

@section('header')
    <header class="video-background" role="banner">
        <span class="menu-trigger animated fadeInDown">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </span>
        @include('partials.nav')
        <div id="video">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/dO7D--52ois" frameborder="0" allowfullscreen></iframe>
        </div>
    </header>
@stop

@section('content')
    <br><br><br>

<div class="row">
    <div class="col-xs-12 single-content">
        

        <h1>Dave Hempy | MVC Architecture</h1>

        <p class="subtitle">September 14, 2016 @ 6pm @ <a href="http://www.plantory.org/">Plantory</a></p>

        <p>
            Finally got the video uploaded to Youtube for your viewing pleasure. 
        </p>
        
        @include('partials.smallFooter')
    </div><!-- main-content/col -->
</div>
@stop

@section('scripts')
    <script src="{{ url('/js/fitvids.js') }}"></script>
    <script>
      $(document).ready(function(){
        // Target your .container, .wrapper, .post, etc.
        $("#video").fitVids();
      });
    </script>
@stop
