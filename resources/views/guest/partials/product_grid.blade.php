<section>
    <div class="banner-title">
        CURRENT SERIES
    </div>

    <div class="container">
        @foreach ($comics as $item)
            <div class="card">
                <img src="{{ $item['thumb'] }}" alt="{{ $item['title'] }}">
            </div>
            <p class="card-title">{{ $item['title'] }}</p>
        @endforeach
    </div>
</section>
