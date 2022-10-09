@php
$socials = [
  [
    'href' => '#',
    'src'  => asset('img/footer-facebook.png'),
    'alt' => 'facebook logo'
  ],
  [
    'href' => '#',
    'src'  => asset('img/footer-twitter.png'),
    'alt' => 'twitter logo'
  ],
  [
    'href' => '#',
    'src'  => asset('img/footer-youtube.png'),
    'alt' => 'youtube logo'
  ],
  [
    'href' => '#',
    'src'  => asset('img/footer-pinterest.png'),
    'alt' => 'pinterest logo'
  ],
  [
    'href' => '#',
    'src'  => asset('img/footer-periscope.png'),
    'alt' => 'periscope logo'
  ]
];

$menu_1 = [
  [
    'href' => '#',
    'text' => 'Characters'
  ],
  [
    'href' => '#',
    'text' => 'Comics'
  ],
  [
    'href' => '#',
    'text' => 'Movies'
  ],
  [
    'href' => '#',
    'text' => 'TV'
  ],
  [
    'href' => '#',
    'text' => 'Games'
  ],
  [
    'href' => '#',
    'text' => 'Videos'
  ],
  [
    'href' => '#',
    'text' => 'News'
  ]
];

$menu_2 = [
  [
    'href' => '#',
    'text' => 'Shop DC'
  ],
  [
    'href' => '#',
    'text' => 'Shop DC Collectibles'
  ]
];

$menu_3 = [
  [
    'href' => '#',
    'text' => 'Terms Of Use'
  ],
  [
    'href' => '#',
    'text' => 'Privacy policy (New)'
  ],
  [
    'href' => '#',
    'text' => 'Add Choices'
  ],
  [
    'href' => '#',
    'text' => 'Advertising'
  ],
  [
    'href' => '#',
    'text' => 'Jobs'
  ],
  [
    'href' => '#',
    'text' => 'Subscriptions'
  ],
  [
    'href' => '#',
    'text' => 'Talent Workshops'
  ],
  [
    'href' => '#',
    'text' => 'CPSC Certificates'
  ],
  [
    'href' => '#',
    'text' => 'Ratings'
  ],
  [
    'href' => '#',
    'text' => 'Shop Help'
  ],
  [
    'href' => '#',
    'text' => 'Contact Us'
  ]
];

$menu_4 = [
  [
    'href' => '#',
    'text' => 'DC'
  ],
  [
    'href' => '#',
    'text' => 'MAD Magazine'
  ],
  [
    'href' => '#',
    'text' => 'DC Kids'
  ],
  [
    'href' => '#',
    'text' => 'DC Universe'
  ],
  [
    'href' => '#',
    'text' => 'DC Power Visa'
  ]
];
@endphp

<footer>
  <div class="nav">
    <div class="container">
      <div>
        <div>
          <h4>DC Comics</h4>
          <ul>
            @foreach($menu_1 as $link)
            <li>
              <a href="{{ $link['href'] }}">
                {{ $link['text'] }}
              </a>
            </li>
            @endforeach
          </ul>
        </div>
        
        <div>
          <h4>Shop</h4>
          <ul>
            @foreach($menu_2 as $link)
            <li>
              <a href="{{ $link['href'] }}">
                {{ $link['text'] }}
              </a>
            </li>
            @endforeach
          </ul>
        </div>
      </div>
      
      <div>
        <h4>DC</h4>
        <ul>
          @foreach($menu_3 as $link)
          <li>
            <a href="{{ $link['href'] }}">
              {{ $link['text'] }}
            </a>
          </li>
          @endforeach
        </ul>
      </div>

      <div>
        <h4>Sites</h4>
        <ul>
          @foreach($menu_4 as $link)
          <li>
            <a href="{{ $link['href'] }}">
              {{ $link['text'] }}
            </a>
          </li>
          @endforeach
        </ul>
      </div>

      <img src="{{ asset('img/dc-logo-bg.png') }}" alt="DC Comics Logo">
    </div>
  </div>

  <div class="footer-cta">
    <div class="container">
      <a class="button" href="#">Sign-up now!</a>
      <div class="socials">
        <h3>Follow us</h3>
        <ul class="social-list">
          @foreach($socials as $social)
          <li>
            <a href="{{ $social['href'] }}">
              <img src="{{ $social['src'] }}" alt="{{ $social['alt'] }}">
            </a>
          </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</footer>