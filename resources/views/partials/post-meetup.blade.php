<article class="post">
    <div class="post-preview col-xs-10  no-gutter">
        <p class="meta">
            <span class="city {{ strtolower($post->talk->city) }}">
                <i class="fa fa-map-marker"></i> {{ $post->talk->city }}
            </span>
            <i class="fa fa-calendar"></i> 
            <a href="{{ URL::to('about') }}">
                {{ $post->talk->date }}
            </a>
        </p>
        <h2><a href="{{ URL::to('event/' . $post->slug) }}">{{ $post->talk->title }}</a></h2>
        
        <p>
            {{ $post->talk->description }}
        </p>
        <p class="meta">
            <a href="{{ URL::to('about') }}">Tech Talks Ky</a>
        </p>
    </div>

    <div class=" col-xs-2  no-gutter">
        <img src="{{ $post->speaker->avatar }}" class="user-icon" alt="user-image">
    </div>
</article>
