@if (property_exists($post, 'facebook_link'))
    <a href="{{ $post->facebook_link }}" target="_blank">
        Facebook Event
    </a>
    @if (property_exists($post, 'meetup_link'))
         - 
    @endif
@endif

@if (property_exists($post, 'meetup_link'))
    <a href="{{ $post->meetup_link }}">Meetup Event</a>
@endif
