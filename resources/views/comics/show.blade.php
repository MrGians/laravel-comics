@extends('layouts.main')

@section('main-content')

<!-- Single Serie -->
<section id="single-serie">
  <!-- Serie Info -->
  <div class="serie-info">
      <div class="container w-50">
        <div class="row">
          <!-- Comic Book Information -->
          <div class="col">
            <!-- Comic Cover -->
            <figure class="comic-cover">
              <span class="top-label">{{ $comics[0]['type'] }}</span>
              <img src="{{ $comics[0]['thumb'] }}" alt="{{ $comics[0]['series'] }}">
              <span class="bottom-label">View Gallery</span>
            </figure>
            <!-- Title -->
            <h2>{{ $comics[0]['title'] }}</h2>
            <!-- Buy Information -->
            <div class="buy-info">
              <div>
                <!-- Price -->
                <span class="price">U.S. Price: <strong>{{ $comics[0]['price'] }}</strong></span>
                <!-- Availability -->
                <span class="available">Available</span>
              </div>
              <!-- Check Availability -->
              <div class="check">
                <a href="#">Check Availability</a>
              </div>
            </div>
            <!-- Description -->
            <p>{{ $comics[0]['description'] }}</p>
          </div>
          <!-- Advertisement // TODO fix -->
          <div class="col">
            <h5>Advertising</h5>
            <figure class="adv">
              <img src="{{asset('img/adv.jpg')}}" alt="{{ $comics[0]['series'] }}">
            </figure>
          </div>
        </div>
    </div>
  </div>
  <hr />
  <!-- Additional Info -->
  <div class="additional-info">
    <div class="container w-70">
      <div class="row">
        <div class="col">
          <h4>Talent</h4>
          <hr/>
          <div>
            <h6>Art by:</h6>
            <p>
              @forelse ($comics[0]['artists'] as $artist)

              {{$artist}}@if(!$loop->last), @else.@endif

              @endforeach
            </p>
          </div>
          <hr/>
          <div></div>
          <hr/>
        </div>
        <div class="col">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Banner Section -->
<section id="banner-light">
    <div class="container">
      <div class="row">
        @foreach ($banner_items as $item)
        <div class="col">
          <span>{{ $item['text'] }}</span>
          <img src="{{ asset($item['src']) }}" alt="{{ $item['text'] }}" />
        </div>
        @endforeach
      </div>
    </div>
  </section>

@endsection