@foreach ($comics as $comic)
    <div class="card">
        <a href="/productdetails">
            <img src="{{ $comic['thumb'] }}" :alt="{{ $comic['title'] }}" />
            <p>{{ $comic['title'] }}</p>
        </a>
    </div>
@endforeach