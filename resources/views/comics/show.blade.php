@extends('layouts.app')

@section('metaTitle', $comic['title'])

@section('content')

  <div class="hero hero-comic">
    <div class="container-sm">
      <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
    </div>
  </div>

  <section class="comic-intro">
    <div class="container-sm">
      <div class="row">
        <div class="col-66">
          <h1>{{ $comic['title'] }}</h1>
          <div class="list-inline price-info">
            <div class="price">U.S. Price: {{ $comic['price'] }}</div>
            <div>available</div>
            <a class="btn">Check Availability +</a>
          </div>
          <p>{{ $comic['description'] }}</p>
        </div>
        <div class="col-33">
          <div>advertisement</div>
          <img src="{{ asset('img/adv.jpg') }}" alt="comic adv">
        </div>
      </div>
    </div>
  </section>

  <section class="comic-data">
    <div class="container-sm">
      <div class="row">
        <div class="col-6">
          <h2>Talent</h2>
          <table>
            <tr>
              <th>Art by:</th>
              <td>{{ implode(', ', $comic['artists']) }}</td>
            </tr>
            <tr>
              <th>Art by:</th>
              <td>{{ implode(', ', $comic['writers']) }}</td>
            </tr>
          </table>
        </div>
        <div class="col-6">
          <h2>Specs</h2>
          <table>
            <tr>
              <th>Series:</th>
              <td>{{ $comic['series'] }}</td>
            </tr>
            <tr>
              <th>U.S. Price:</th>
              <td>{{ $comic['price'] }}</td>
            </tr>
            <tr>
              <th>On Sale Date:</th>
              <td>{{ $comic['sale_date'] }}</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </section>

  <div class="comic-features">
    <div class="container-sm features-wrapper">
      <div class="row">
        <div class="col-4">
          <h3>Digital comics</h3>
          <img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="">
        </div>
        <div class="col-4">
          <h3>Shop DC</h3>
          <img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="">
        </div>
        <div class="col-4">
          <h3>Comic Shop Locator</h3>
          <img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="">
        </div>
        <div class="col-4">
          <h3>Subscriptions</h3>
          <img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="">
        </div>
      </div>
    </div>
  </div>

@endsection