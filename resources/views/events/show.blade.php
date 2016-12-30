@extends('layouts.blog')

@section('title', $post->speaker->name . ' - ' . $post->title . ' | Tech Talks Ky')

@section('body_classes')

@section('header')

    <header class="hero-image" role="banner" style="background: url('http://pre02.deviantart.net/41ba/th/pre/i/2012/241/0/4/fallout_terminal_texture_by_team_machine-d5cubxx.jpg'); background-repeat: none; background-size: cover">

        <div class="title">{{ $post->speaker->name }}</div>
        <div class="subtitle">
            <div class="container">
                {{ $post->title }}
            </div>
        </div>
        <div class="date">{{ $post->meetup_date }} </div>

        <span class="menu-trigger animated fadeInDown">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </span>


        @include('partials.nav')
    </header>
    <footer class="single">
        <div class="container">
            <div class="row">
                <div class="col-sm-offset-1 col-xs-12 col-sm-2">
                    @if ($post->speaker->avatar)
                        <img src="{{ $post->speaker->avatar }}" class="user-icon " alt="user-image">
                    @endif
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="category-list">
                        <p>Presentation <span>{{ $post->meetup_date }}</span></p>
                        <p>
                            By @include('partials.speaker', compact('post'))
                        </p>
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

        <p class="subtitle">{{ $post->meetup_date }} @ @include('venues.' . strtolower($post->city))</p>

        <p>
            @include('partials.links')
        </p>

        {!! Markdown::convertToHtml($post->content) !!}
        
        @include('partials.smallFooter')
    </div><!-- main-content/col -->
</div>

@stop
