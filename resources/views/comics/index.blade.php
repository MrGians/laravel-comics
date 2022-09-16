@extends('layouts.main')

@section('main-content')

<!-- Current Series -->
<section id="current-series">
    <div class="container">
      <h4>Current Series</h4>
      <div class="row">
        @foreach ($comics as $serie)
        <div class="col card">
          <a href="{{ route('comics.show', ['id' => $loop->index]) }}">
            <figure>
              <img src="{{ $serie['thumb'] }}" alt="{{ $serie['series'] }}" />
              <figcaption>{{ $serie['series'] }}</figcaption>
            </figure>
          </a>
        </div>
        @endforeach
      </div>
      <!-- Load More Button -->
      <button class="btn">Load More</button>
    </div>
  </section>

<!-- Banner Section -->
<section id="banner">
    <div class="container">
      <div class="row">
        @foreach ($banner_items as $item)
        <div class="col">
          <img src="{{ asset($item['src']) }}" alt="{{ $item['text'] }}" />
          <span>{{ $item['text'] }}</span>
        </div>
        @endforeach
      </div>
    </div>
  </section>

@endsection