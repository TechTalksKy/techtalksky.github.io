@extends('layouts.blog')

@section('title', $post->speaker->name . ' - ' . $post->title . ' | Tech Talks Ky')

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
            <iframe width="560" height="315" src="{{ $post->video_url }}" frameborder="0" allowfullscreen></iframe>
        </div>
    </header>
    <footer class="single">
        <div class="container">
            <div class="row">
                <div class="col-sm-offset-1 col-xs-12 col-sm-2">
                    <img src="{{ $post->speaker->avatar }}" class="user-icon " alt="user-image">
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="category-list">
                        <p>Presentation <span>{{ $post->meetup_date }}</span></p>
                        <p>By {{ $post->speaker->name }}</p>

                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div>

        
    </footer>
@stop

@section('content')
    <br><br><br>

<div class="row">
    <div class="col-xs-12 single-content">
        

        <h1>{{ $post->speaker->name }} | {{ $post->title }}</h1>

        <p class="subtitle">{{ $post->meetup_date }} @ @include('venues.' . $post->city)</p>

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
