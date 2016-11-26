@if ($post->speaker->website)
    <a href="{{ $post->speaker->website }}">
        {{ $post->speaker->name }}
    </a>
@else
    {{ $post->speaker->name }}
@endif

