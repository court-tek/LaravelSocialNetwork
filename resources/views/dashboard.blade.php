@extends('layouts.child')

@section('title') Dashboard
@ {{ $user->username }}
@endsection

@section('content')
@include('includes.message-block')
<main class="post-it">

  <div id="simpleModal" class="modal">
    <div class="modal-content">
      <button type="button" name="button">Change Password</button>
      <button type="button" name="button">Authorized Apps</button>
      <button type="button" name="button">Notifications</button>
      <button type="button" name="button">Privacy and Security</button>
      <button type="button" name="button">Log out</button>
      <button id="cancelBtn" type="button" name="button">Cancel</button>
    </div>
  </div>

  <div class="top-cards">{{-- Top Cards--}}
    <div class="card1 col-md-6">{{-- Card 1 --}}
      <div class="userImage"></div>{{-- Section A --}}
      <div class="usserInfo">{{-- Section B --}}
        <h1 class="flexer">{{ $user->username }}</h1>
        <button class="btn1 flexer" type="button" name="button">Edit Profile</button>
        <button class="modalclick"><i class="fas fa-cog"></i></button>
      </div>{{-- Section B ends --}}
      <ul>{{-- Section C --}}
        <li><span class="post">0</span> Posts</li>
        <li><span class="foler">0</span> Followers</li>
        <li><span class="foling">0</span> Following</li>
      </ul>{{-- Section C ends --}}
      <div class="name">{{-- Section D--}}
        <h1>{{ $user->firstname }}</h1>
      </div>{{-- Section D ends --}}
    </div>{{-- Card 1 ends --}}

    <div class="card2 col-md-6">
      <h3>Post Something</h3></div>
    <div class="postIt">{{-- Form Section --}}
      <form class="yo" enctype="multipart/form-data" action="{{ route('post.create') }}" method="post">
        <div class="form-group">
          <input type="text" placeholder="Add a comment..." name="body" id="nueva-post" style="height: 18px" />
        </div>
        <div class="form-group">
          <input type="file" name="cover_img" id="file" class="inputfile" />
          <label for="file" name="cover_img" class="la-bel"><i class="fas fa-upload"></i> Choose an image</label>
        </div>
        <button type="submit" name="button" class="btn-post">Create Post</button>
        <input type="hidden" name="_token" value="{{ Session::token() }}">
      </form>
    </div>{{-- Form Section end --}}
  </div>{{-- Top Cards ends --}}


  <div class="container">
    <div class="row">
      <div class="area-title col-md-12">
        <h1 class="_rrmm3">Posts</h1>
      </div>
    </div>
  </div>


  <div class="show col-md-12">
    <div class="level1">
      <div class="level2 grid">
        <div class="item1 p">image 1</div>
        <div class="item2 p">image 2</div>
        <div class="item3 p">image 3</div>
      </div>
    </div>
  </div>
</main>
@endsection
