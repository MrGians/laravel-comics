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
              <span class="top-label">{{ $comic['type'] }}</span>
              <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
              <span class="bottom-label">View Gallery</span>
            </figure>
            <!-- Title -->
            <h2>{{ $comic['title'] }}</h2>
            <!-- Buy Information -->
            <div class="buy-info">
              <div>
                <!-- Price -->
                <span class="price">U.S. Price: <strong>{{ $comic['price'] }}</strong></span>
                <!-- Availability -->
                <span class="available">Available</span>
              </div>
              <!-- Check Availability -->
              <div class="check">
                <a href="#">Check Availability</a>
              </div>
            </div>
            <!-- Description -->
            <p>{{ $comic['description'] }}</p>
          </div>
          <!-- Advertisement // TODO fix -->
          <div class="col">
            <h5>Advertisement</h5>
            <figure class="adv">
              <img src="{{asset('img/adv.jpg')}}" alt="{{ $comic['series'] }}">
            </figure>
          </div>
        </div>
    </div>
  </div>
  <hr />
  <!-- Additional Info -->
  <div class="additional-info">
    <div class="container">
      <div class="row">
        <!-- Talent info -->
        <div class="col">
          <div class="talent">
            <h4>Talent</h4>
            <hr/>
            <!-- Artist list -->
            <div class="artist">
              <h6>Art by:</h6>
              <p>
                @forelse ($comic['artists'] as $artist)
                <span>{{$artist}}</span>@if(!$loop->last), @else.@endif
                @endforeach
              </p>
            </div>
            <hr/>
            <!-- Writers list -->
            <div class="writers">
              <h6>Written by:</h6>
              <p>
                @forelse ($comic['writers'] as $writers)

                <span>{{$writers}}</span>@if(!$loop->last), @else.@endif

                @endforeach
              </p>
            </div>
            <hr/>
          </div>
        </div>
        <!-- Specs info -->
        <div class="col">
          <div class="specs">
            <h4>Specs</h4>
            <hr/>
            <!-- Serie type -->
            <div class="type">
              <h6>Series:</h6>
              <span>{{ $comic['series'] }}</span>
            </div>
            <hr/>
            <!-- Serie price -->
            <div class="price">
              <h6>U.S. Price:</h6>
              <h6>{{ $comic['price'] }}</h6>
            </div>
            <hr/>
            <!-- Serie sale date -->
            <div class="sale-date">
              <h6>On Sale Date:</h6>
              <h6>{{ $comic['sale_date'] }}</h6>
            </div>
            <hr/>
          </div>
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