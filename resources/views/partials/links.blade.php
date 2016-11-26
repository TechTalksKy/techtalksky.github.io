@if (property_exists($post->links, 'facebook'))
    <a href="{{ $post->links->facebook }}" target="_blank">
        Facebook Event
    </a>
    @if (property_exists($post->links, 'meetup'))
         - 
    @endif
@endif

@if (property_exists($post->links, 'meetup'))
    <a href="{{ $post->links->meetup }}">Meetup Event</a>
@endif
