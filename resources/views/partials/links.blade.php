
@if ($post->facebook_link)
    <a href="{{ $post->facebook_link }}" target="_blank">
        Facebook Event
    </a>
    @if ($post->meetup_link)
         - 
    @endif
@endif

@if ($post->meetup_link)
    <a href="{{ $post->meetup_link }}">Meetup Event</a>
@endif
