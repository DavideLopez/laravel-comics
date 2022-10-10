<header>
  <div class="container">
    <a class="logo" href="/">
      <img src="{{ asset('img/dc-logo.png') }}" alt="DC Comics logo">
    </a>

    @php
    $links = [
      [
        'href' => '/characters',
        'text' => 'characters',
        'active' => false
      ],
      [
        'href' => '/comics',
        'text' => 'comics',
        'active' => true
      ],
      [
        'href' => '/movies',
        'text' => 'movies',
        'active' => false
      ],
      [
        'href' => '/tv',
        'text' => 'tv',
        'active' => false
      ],
      [
        'href' => '/games',
        'text' => 'games',
        'active' => false
      ],
      [
        'href' => '/collectibles',
        'text' => 'collectibles',
        'active' => false
      ],
      [
        'href' => '/videos',
        'text' => 'videos',
        'active' => false
      ],
      [
        'href' => '/fans',
        'text' => 'fans',
        'active' => false
      ],
      [
        'href' => '/news',
        'text' => 'news',
        'active' => false
      ],
      [
        'href' => '/shop',
        'text' => 'shop',
        'active' => false
      ]
    ];
    @endphp

    <nav class="nav">
      <ul class="nav-list">
        @foreach($links as $link)
          <li class="nav-item">
            <a class="nav-link" href="{{ $link['href'] }}">
              {{ $link['text'] }}
            </a>
          </li>
        @endforeach
      </ul>
    </nav>
  </div>
</header>