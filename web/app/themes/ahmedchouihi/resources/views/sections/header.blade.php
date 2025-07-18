<header class="banner">
  <a class="brand" href="{{ home_url('/') }}">
    {!! $siteName !!}
  </a>

  <!-- Mobile menu button - always show on mobile -->
  <button class="mobile-menu-toggle" id="mobileMenuToggle" aria-label="Toggle navigation">
    <span class="hamburger-line"></span>
    <span class="hamburger-line"></span>
    <span class="hamburger-line"></span>
  </button>

  <!-- Desktop navigation -->
  <nav class="nav-primary" aria-label="Navigation">
    @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
    @else
      <!-- Fallback menu for desktop -->
      <ul class="nav">
        <li><a href="{{ home_url('/') }}">Home</a></li>
        <li><a href="{{ home_url('/about') }}">About</a></li>
        <li><a href="{{ home_url('/contact') }}">Contact</a></li>
      </ul>
    @endif
  </nav>

  <!-- Mobile navigation -->
  <nav class="nav-mobile" id="mobileNav" aria-label="Mobile Navigation">
    @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav-mobile-menu', 'echo' => false]) !!}
    @else
      <!-- Fallback menu for mobile -->
      <ul class="nav-mobile-menu">
        <li><a href="{{ home_url('/') }}">Home</a></li>
        <li><a href="{{ home_url('/about') }}">About</a></li>
        <li><a href="{{ home_url('/contact') }}">Contact</a></li>
      </ul>
    @endif
  </nav>
</header>
