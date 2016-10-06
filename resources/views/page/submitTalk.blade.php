@extends('layouts.page')

@section('title', 'Submit a Talk | Tech Talks KY')

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

            <h3>Submit a Talk</h3>

            <p>
                Got a sweet topic you think would be awesome to present at an upcoming TechTalksKy? You are in the right place!
            </p>

            <p>
                Fill out the form below and we will be in touch and figure out the schedule.
            </p>

            @if ($errors->count() > 0)
                <div class="alert alert-danger">
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>   
                    @endforeach
                    </ul>
                </div>
            @endif
            <form action="/submit-a-talk" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="author_name">Your Name</label>
                    <input
                        type="text"
                        class="form-control"
                        name="author_name"
                        placeholder="Your Name"
                        value="{{ old('author_name') }}"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input
                        type="text"
                        class="form-control"
                        name="email"
                        placeholder="Your Email"
                        value="{{ old('email') }}"
                        required
                    >
                </div>
    
                <div class="form-group">
                    <label for="avatar">Avatar Link</label>
                    <input
                        type="text"
                        class="form-control"
                        name="avatar"
                        placeholder="Hot link to an avatar for you"
                        value="{{ old('avatar') }}"
                    >
                </div>

                <div class="form-group">
                    <label for="body">A bit about you</label>
                    <textarea 
                        id="bio"
                        class="form-control"
                        name="bio"
                        placeholder="Tell us about you, where you work, what you're interested in"
                    >{{ old('bio') }}</textarea>
                </div>

                <div class="form-group">
                    <label for="title">Title of Talk</label>
                    <input
                        type="text"
                        class="form-control"
                        name="title"
                        placeholder="Title of your talk"
                        value="{{ old('title') }}"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="description">Brief Description</label>
                    <input
                        type="text"
                        class="form-control"
                        name="description"
                        placeholder="A brief paragraph about your talk."
                        value="{{ old('description') }}"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="body">In-Depth Info about Talk</label>
                    <textarea
                        id="post-body"
                        class="form-control"
                        name="body"
                        placeholder="The more in-depth run down of your talk"
                    >{{ old('body') }}</textarea>
                </div>

                <div class="form-group">
                    <label for="availability">Availability</label>
                    
                    <select name="availability" class="form-control">
                        @for ($i = 0; $i < 12; $i++)
                            @include('partials.louisvilleOptions', ['i' => $i])
                            @include('partials.lexingtonOptions', ['i' => $i])
                        @endfor
                    </select>
                </div>

                <div class="form-group">

                    <input
                        class="form-control"
                        type="radio"
                        name="city"
                        value="Lexington"
                        {{ old('city') == 'Lexington' ? 'checked':'' }}
                        
                    > Lexington
                    <input
                        class="form-control"
                        type="radio"
                        name="city"
                        value="Louisville"
                        {{ old('city') == 'Louisville' ? 'checked':'' }}
                    > Louisville
                        
                    
                </div>

                <div class="form-group">
                    <input class="btn btn-default" type="submit" value="Submit">
                </div>

            </form>




            <p>
                <h4>Connect with Tech Talks Ky</h4>
                @include('partials.twitter')

                @include('partials.facebook')

                @include('partials.slack')

                
            </p>

            <footer class="split-footer">
                <a href="{{ URL::to('/') }}">Home</a>
            </footer>

            </div><!-- main content -->
    </div>


@stop

@section('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
@stop

@section('scripts')
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
    <script>
        var simplemde = new SimpleMDE({ element: document.getElementById("post-body") });
        var simplemde = new SimpleMDE({ element: document.getElementById("bio") });
    </script>
@stop
