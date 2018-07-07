<header>
  <div class="head-container">

    <div class="logo flex-game">
      <a href="{{ route('timeline') }}">
        <i class="fab fa-instagram"></i>
      </a>
      <a class="insta" href="{{ route('timeline') }}">
        Instafaux
      </a>

    </div>

    <form class="search-area _ohiyl" action="{{ route('search.results') }}">
      <span class="mag-glass"><i class="fa fa-search" aria-hidden="true"></i></span>
      <input class="_qvcci " id="filter" type="text" placeholder="Search">
      <div class="_x"><i class="fa fa-times-circle" aria-hidden="true"></i></div>
    </form>

    <div class="user-area flex-game">
      {{-- @if (Auth::check()) --}}
      <a href="#">
          <i class="fa fa-compass" aria-hidden="true"></i>
        </a>
      <a href="#">
          <i class="far fa-heart"></i>
        </a>

      <a href="{{ route('dashboard', [auth()->user()->slug]) }}">
          <i class="far fa-user"></i>
        </a>

      <a class="fa-plus" href="#">
          <i class="far fa-plus-square"></i>
        </a>
      {{-- @else --}}
      {{-- <a><button style="background-color:cyan;color:#fff;" type="button" name="button">Login</button></a> --}}
      {{-- <a><button style="background:none;border:none;color:cyan;" type="button" name="button">Sign Up</button></a> --}}

    </div>
  </div>
</header>
{{-- @endif --}}
