<h1>Actors</h1>

@forelse($actors as $actor)

    <div>
        <h2>{{ $actor->first_name }} {{ $actor->last_name }}</h2>
        <p>Age: {{ $actor->age }}</p>
        <p>Country: {{ $actor->country }}</p>
        <p>Has won awards: {{ $actor->has_won_awards ? 'Yes' : 'No' }}</p>
    </div>
@empty
    <p>No actors found.</p>
@endforelse
