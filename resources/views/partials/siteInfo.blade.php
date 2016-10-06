<div class="site-info">
    <div class="primary-info">
        <img width="396" height="177" style="margin-bottom:20px;" src={{asset('img/techtalks-website-sidebar.png')}} alt="">
        <p>Welcome to Tech Talks KY!  A fun monthly event to talk about software and networking with other devs!</p>
    </div>
    <div class="secondary-info">
        <p>
            @include('partials.twitter')
            @include('partials.facebook')
            @include('partials.meetup')
        </p>
        <p>
            <a class="btn btn-primary" target="_blank" href="{{ URL::to('https://wes37.typeform.com/to/JF00Dd') }}"><i class="fa fa-slack"></i>Join Our Slack Community</a>
        </p>
    </div>
</div>
