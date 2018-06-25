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

    <div class="search-area _ohiyl">
      <span class="mag-glass"><i class="fa fa-search" aria-hidden="true"></i></span>
      <input class="_qvcci " id="filter" type="text" placeholder="Search">
      <div class="_x"><i class="fa fa-times-circle" aria-hidden="true"></i></div>
    </div>

    <div class="user-area flex-game">
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

    </div>
  </div>
</header>
