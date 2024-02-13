<h1>Media Details</h1>

    <div>
        <h2>{{ $media->title }}</h2>
        <p>Type: {{ ucfirst($media->type) }}</p>
        <p>Rating: {{ $media->rating }}</p>
        <p>Length: {{ $media->length_in_minutes }} minutes</p>
        <p>Released: {{ $media->released_at }}</p>
        <p>Country: {{ $media->country_of_origin }}</p>
        <p>Trailer ID: {{ $media->youtube_trailer_id }}</p>
        <p>Summary: {{ $media->summary }}</p>
        <p>Spoken Language: {{ $media->spoken_in_language }}</p>
    </div>

    <h2>Actors</h2>
    @forelse($media->actors as $actor)
        <div>
            <h3>{{ $actor->first_name }} {{ $actor->last_name }}</h3>
            <p>Age: {{ $actor->age }}</p>
            <p>Country: {{ $actor->country }}</p>
            <p>Has won awards: {{ $actor->has_won_awards ? 'Yes' : 'No' }}</p>
        </div>
        <hr>
    @empty
        <p>No actors found for this media.</p>
    @endforelse