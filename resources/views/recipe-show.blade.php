
<div class="container my-5">
    <h1>{{ $recipe->title }}</h1>

    @if($recipe->video_link)
    @php
        // Extract video ID
        preg_match('/v=([^\&]+)/', $recipe->video_link, $matches);
        $videoId = $matches[1] ?? null;
        $embedLink = $videoId ? "https://www.youtube.com/embed/{$videoId}" : null;
    @endphp

    @if($embedLink)
        <div class="mb-4">
            <iframe width="100%" height="400" src="{{ $embedLink }}" frameborder="0" allowfullscreen></iframe>
        </div>
    @else
        <p>Invalid video link</p>
    @endif
@endif


    <p><strong>Description:</strong> {{ $recipe->description }}</p>

    <div>
        <h4>Recipe Content:</h4>
        {!! nl2br(e($recipe->recipe)) !!}
    </div>
</div>

