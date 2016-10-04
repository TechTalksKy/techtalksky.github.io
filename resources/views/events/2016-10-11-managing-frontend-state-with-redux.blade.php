@extends('layouts.blog')

@section('title', 'Colan Connon - Managing Frontend State with Redux | Tech Talks Ky')

@section('body_classes')

@section('header')
    <header class="hero-image" role="banner" style="background: url('http://pre02.deviantart.net/41ba/th/pre/i/2012/241/0/4/fallout_terminal_texture_by_team_machine-d5cubxx.jpg'); background-repeat: none; background-size: cover">

        <div class="title">Colan Connon</div>
        <div class="subtitle">Managing Frontend State with Redux</div>
        <div class="date">Oct 11, 2016 @ 6pm @ O'Shea's Highlands</div>

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
                    <img src="https://avatars2.githubusercontent.com/u/6674648?v=3&s=466" class="user-icon " alt="user-image">
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="category-list">
                        <p>Presentation <span>October 11th 2016 @ 6pm</span></p>
                        <p>By <a href="https://github.com/colanconnon">Colan Connon</a></p>

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


            <h1>Colan Connon | Managing Frontend State with Redux</h1>

            <p class="subtitle">October 11, 2016 @ 6pm @ <a href="http://osheaslouisville.net/">O'Shea's Highlands</a></p>

            <p><a href="https://www.facebook.com/events/1455873317761591/" target="_blank">Event Info</a></p>
            <p>
                Struggling with managing state in a consistent way in your javascript applications? Want to learn more about modern front-end
                architectures? In this talk we will explore using redux with angular, react, and plain javascript.
            </p>

            <p><a href="http://redux.js.org/">Redux</a></p>

            <p>
                <a href="https://github.com/colanconnon">Colan Connon</a>
                has been programming for 5 years, starting out in a .NET stack.  He's been playing with React and Angular for the past 2 years and is currently an Engineer at
                <a href="http://generationtux.com">Generation Tux</a>
            </p>

            @include('partials.smallFooter')
        </div><!-- main-content/col -->
    </div>

@stop
