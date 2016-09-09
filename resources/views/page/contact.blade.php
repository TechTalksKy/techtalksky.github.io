@extends('layouts.page')

@section('title', 'About | Tech Talks KY')

@section('body_classes')

@section('content')

<div class="row">

        @include('partials.nav')

        <section class="sidebar col-md-5 col-sm-12" style="background-image: url(img/techtalks_website_background_image.jpg)"><span class="menu-trigger animated fadeInDown">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </span>

            @include('partials.siteInfo')

        </section>
        <div class="col-md-7 col-sm-12 col-md-offset-5 main-content">

            <h3>About</h3>

            <p>
                Tech Talks KY (formerly LEX>>FWD) is a meetup group in Lexington, Ky with a focus on software, programming and IT technologies. Our aim is to be platform agnostic and to focus on overall concepts and practices. We are open to everyone.
            </p>

            <p>
                We currently meet at <a href="http://www.plantory.org">The Plantory</a> once a month (the second Wedneday) at 6pm and welcome any who wants to learn or talk about software and technology or anything related.
            </p>

            <p>
                Presentation/Discussion and also hearing from our sponsors at IT staffing firm <a href="https://www.teksystems.com/en">TEK Systems</a>.
            </p>

            <p>
                <h4>Connect with Tech Talks Ky</h4>
                <a href="https://twitter.com/techtalksky" class="social-links">
                    <i class="fa fa-twitter"></i>
                </a>

                <a href="https://facebook.com/techtalksky" class="social-links">
                    <i class="fa fa-facebook"></i>
                </a>

                <a href="https://wes37.typeform.com/to/JF00Dd" class="social-links">
                    <i class="fa fa-slack"></i>
                </a>
            </p>

            <p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3141.455090699256!2d-84.49408178376453!3d38.05978137970851!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x884244f794e1b295%3A0x5c5d0b1e447dfddf!2s501+W+6th+St+%23250%2C+Lexington%2C+KY+40508!5e0!3m2!1sen!2sus!4v1473387664532" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </p>

            {{-- <form>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" placeholder="Jane Doe" class="form-control" name="name"></div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" placeholder="example@email.com" class="form-control" name="email"></div>
                <div class="form-group">
                    <label for="company">Company</label>
                    <input type="text" placeholder="Example Ltd" class="form-control" name="company"></div>

                <div class="form-group">
                    <label for="number">Phone Number</label>
                    <input type="tel" placeholder="+44778217779" class="form-control" name="number"></div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" name="message" placeholder="Hello, lets chat"></textarea></div>

                <div class="form-group">
                    <input class="btn btn-default" type="submit" value="Send"></div>
            {{ csrf_field() }}
            </form> --}}

            <footer class="split-footer"><a href="{{ URL::to('/') }}">Home</a>
            
            
        </footer>

            </div><!-- main content -->
    </div>
@stop
