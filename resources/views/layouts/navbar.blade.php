<?php
$enable = '';
if(str_contains(url()->current(), 'libros')) {
  $enable = 'libros';
} elseif (str_contains(url()->current(), 'contacto')) {
  $enable = 'contacto';
}
?>

<div class="container-fluid">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('home') }}">Visagob</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link @if($enable === 'libros' ) active @endif" href="{{ route('books') }}">{{ __('navbar.books') }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if($enable === 'contacto' ) active @endif" href="{{ route('contact') }}">{{ __('navbar.contact') }}</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ __('navbar.language') }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              @foreach(LaravelLocalization::getLocalesOrder() as $localeCode => $props)
              <li>
                <a rel="alternate" hreflang="{{ $localeCode }}" class="dropdown-item" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                  {{ ucfirst($props['native']) }}
                </a>
              </li>
              @endforeach
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>