<h1>Media List</h1>

@forelse($media as $m)
    <div>
        <h2>{{ $m->title }}</h2>
        <p>Type: {{ ucfirst($m->type) }}</p>
        <p>Rating: {{ $m->rating }}</p>
        <p>Length: {{ $m->length_in_minutes }} minutes</p>
        <p>Released: {{ $m->released_at }}</p>
        <p>Country: {{ $m->country_of_origin }}</p>
        <p>Trailer ID: {{ $m->youtube_trailer_id }}</p>
        <p>Summary: {{ $m->summary }}</p>
        <p>Spoken Language: {{ $m->spoken_in_language }}</p>
    </div>
@empty
    <p>No media found.</p>
@endforelse