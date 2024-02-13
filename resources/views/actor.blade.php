<h1>{{ $actor->first_name }} {{ $actor->last_name }}</h1>
<p>Age: {{ $actor->age }}</p>
<p>Sex: {{ $actor->sex }}</p>
<p>Country: {{ $actor->country }}</p>
<p>Has won awards: {{ $actor->has_won_awards ? 'Yes' : 'No' }}</p>

<h2>Movies/Series</h2>
@forelse($actor->media as $media)
    <div>
        <h3>{{ $media->title }}</h3>
        <p>Type: {{ ucfirst($media->type) }}</p>
        <p>Rating: {{ $media->rating }}</p>
        <p>Length: {{ $media->length_in_minutes }} minutes</p>
        <p>Released: {{ $media->released_at }}</p>
        <p>Country: {{ $media->country_of_origin }}</p>
        <p>Trailer ID: {{ $media->youtube_trailer_id }}</p>
        <p>Summary: {{ $media->summary }}</p>
        <p>Spoken Language: {{ $media->spoken_in_language }}</p>
    </div>
@empty
<p>No movies/series found for this actor.</p>
@endforelse