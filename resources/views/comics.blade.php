@extends('layouts.app')

@section('metaTitle', 'Comics')

@section('content')
  <div class="hero">
    <div class="container">
        <h2 class="hero-title">Current series</h2>
    </div>
  </div>

  <div class="series">
    <div class="container serie-list">
      @forelse($comics as $comic)
        <div class="card serie-item">
          <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
          <h3>{{ $comic['title'] }}</h3>
        </div>
      @empty
        <p>No comics available</p>
      @endforelse
    </div>

    <div class="container cta">
        <a href="#">Load More</a>
    </div>
  </div>

  @php
  $features = [
    [
      'src' => asset('img/buy-comics-digital-comics.png'),
      'text' => 'Digital comics'
    ],
    [
      'src' => asset('img/buy-comics-merchandise.png'),
      'text' => 'DC merchandise'
    ],
    [
      'src' => asset('img/buy-comics-subscriptions.png'),
      'text' => 'Subscription'
    ],
    [
      'src' => asset('img/buy-comics-shop-locator.png'),
      'text' => 'Comic shop locator'
    ],
    [
      'src' => asset('img/buy-dc-power-visa.svg'),
      'text' => 'DC power visa'
    ]
  ];
  @endphp

  <div class="features">
    <ul class="container feature-list">
      @foreach($features as $feature)
      <li class="feature-item">
        <img src="{{ $feature['src'] }}" alt="{{ $feature['text'] }}">
        {{ $feature['text'] }}
      </li>
      @endforeach
    </ul>
  </div>
@endsection