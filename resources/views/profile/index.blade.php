@extends('layouts.child')

@section('title') Dashboard
{{-- @ {{ $user->username }} --}}
@endsection

@section('content')
@include('includes.message-block')
<main class="post-it">

  {{-- Options Modal--}}
  <div id="simpleModal" class="modal">
    <div class="modal-content">
      <button type="button" name="button">Change Password</button>
      <button type="button" name="button">Authorized Apps</button>
      <button type="button" name="button">Notifications</button>
      <button type="button" name="button">Privacy and Security</button>
      <button type="button" name="button"><a class="_logout" href="{{ route('logout') }}">Log out</a></button>
      <button id="cancelBtn" type="button" name="button">Cancel</button>
    </div>
  </div>
  {{-- Options Modal ends --}}

  {{-- Upload post Modal --}}
  <div id="postModal" class="row">{{-- Starts --}}
    <div class="postContent">{{--  --}}
      <h3>Post Something</h3>
      <div class="postIt">{{-- Form Section --}}
        <form class="yo" enctype="multipart/form-data" action="{{ route('post.create') }}" method="post">
          <div class="together">
            <div class="form-group2">
              <input type="text" placeholder="Add a comment..." name="body" id="nueva-post" style="height: 18px" />
            </div>
            <div class="form-group2">
              <input type="file" name="cover_img" id="file" class="inputfile" />
              <label for="file" name="cover_img" class="la-bel"><i style="font-size: 40px;" class="far fa-image"></i></label>
            </div>
          </div>
          <div class="button-group">
            <button type="submit" name="button" class="btn-post">Share</button>
            <button type="submit" name="button" id="cancelBtn" class="btn-cancel">Cancel</button>
            <input type="hidden" name="_token" value="{{ Session::token() }}">
          </div>
        </form>
      </div>{{-- Form Section ends --}}
    </div>{{--  --}}
  </div>{{-- ends --}}
  {{-- Upload post Modal ends here --}}

  <div class="dash_container">{{-- all page content here-dash container starts --}}
    <div class="vtbgv">{{-- Top Carder or Header Card --}}
      <div class="XjzkX">{{-- Image Button start --}}
        <div class="_4dmfD">
          <div class="M-jax3">
            <button class="illaj" type="button" name="button">
              <img src="https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg" alt="">
            </button>
          </div>
        </div>
      </div>{{-- Image Button Ends --}}
      <section class="onelove">{{-- User's Option section --}}
      @if (Auth::check())
        <div class="LMnop">{{-- Section A start --}}
          <h2 class="flexer"></h2>
          <button class="btn1 flexer" type="button" name="button">Edit Profile</button>

          {{-- <button id="modalclick"><i class="fas fa-cog"></i></button> --}}
          <div id="modalclick"><i class="fas fa-cog"></i></div>
        </div>{{-- Section A ends --}}

        <ul class="follow-info">{{-- Section C --}}
          <li><span class="post">0</span> Posts</li>
          <li><span class="foler">0</span> Followers</li>
          <li><span class="foling">0</span> Following</li>
        </ul>{{-- Section C ends --}}
        <div class="name">{{-- Section D--}}
          <h1></h1>
        </div>{{-- Section D ends --}}
      @else
        <div class="LMnop">{{-- Section A start --}}
          <h2 class="flexer">{{ $user->username }}</h2>
          <button class="btn1 flexer" type="button" name="button">Follow</button>

          {{-- <button id="modalclick"><i class="fas fa-cog"></i></button> --}}
          <div id="modalclick"><i class="fas fa-cog"></i></div>
        </div>{{-- Section A ends --}}

        <ul class="follow-info">{{-- Section C --}}
          <li><span class="post">0</span> Posts</li>
          <li><span class="foler">0</span> Followers</li>
          <li><span class="foling">0</span> Following</li>
        </ul>{{-- Section C ends --}}
      @endif
      </section>{{-- User's Option section ends --}}
    </div>{{-- Top Carder or Header Card --}}

    <div class="fx7hk">{{--  --}}
      <h1 class="_rrmm3">Posts</h1>
      <h1 class="_rrmm3">IFTV</h1>
      <h1 class="_rrmm3">Saved</h1>
    </div>{{--  --}}

    <article class="show">{{--  --}}
      <div>
        <div class="flexit">
          <div class="Nnq7C weEfm">
            <div class="item1 p">image 1</div>
            <div class="item2 p">image 2</div>
            <div class="item3 p">image 3</div>
            <div class="item1 p">image 1</div>
            <div class="item2 p">image 2</div>
            <div class="item3 p">image 3</div>
            <div class="item1 p">image 1</div>
            <div class="item2 p">image 2</div>
            <div class="item3 p">image 3</div>
            <div class="item1 p">image 1</div>
            <div class="item2 p">image 2</div>
            <div class="item3 p">image 3</div>
            <div class="item1 p">image 1</div>
            <div class="item2 p">image 2</div>
            <div class="item3 p">image 3</div>
            <div class="item1 p">image 1</div>
            <div class="item2 p">image 2</div>
            <div class="item3 p">image 3</div>
            <div class="item1 p">image 1</div>
            <div class="item2 p">image 2</div>
            <div class="item3 p">image 3</div>
            <div class="item1 p">image 1</div>
            <div class="item2 p">image 2</div>
            <div class="item3 p">image 3</div>
          </div>
        </div>
      </div>
    </article>{{--  --}}
  </div>{{-- dash container ends --}}
</main>
@endsection
