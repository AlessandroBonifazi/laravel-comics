@foreach ($comics as $comic)
    <div class="card">
        <a href="/comicDetails">
            <img src="{{ $comic['thumb'] }}" :alt="{{ $comic['title'] }}" />
            <p>{{ $comic['title'] }}</p>
        </a>
    </div>
@endforeach