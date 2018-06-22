@extends('layouts.child')

@section('title')
  Timeline
@endsection

@section('content')
<section class='containerI'>
    {{-- @foreach ($posts as $post) --}}
    <div class="container">
        <div class="row">
          <div class='cardee b'>
            {{-- Section A --}}
            <div class="card-header">
              <div class="profile-img"></div>
              <div class="profile-info">
                <div class="name"></div>
                <div class="location">
                  <a href="#">Moss Point, Mississippi</a>
                </div>
              </div>
            </div>
            {{-- Section A Ends --}}

            {{-- Section B --}}
            <div class="content">
              {{-- <img src="/storage/cover_img/{{ $post->cover_img }}" /> --}}
            </div>
            {{-- Section B Ends --}}

            {{-- Section C --}}
            <div class="card-footer">
              <section class="deew12">
                <a class="heart" href="#"><i class="far fa-heart"></i></i></a>
                <a class="bubble" href="#"><i class="far fa-comment"></i></a>
              </section>
              <section class="likes">
                <div class="cuantas-likes"><span>0</span> Likes</div>
              </section>
              <div class="comments">
                <ul id="items" class="list-group">
                  <li class="list-group-item"><span class="friends"></span> <span class="fa-times2"><i class="fa fa-times" aria-hidden="true"></i></span></li>
                </ul>
              </div>
              <div class="time-since">
                <time class="time-hours"><p>1 day ago</p></time>
              </div>
              <section class="form1">
                <form class="textarea1" action="" id="thetext">
                  <input id='item' class="add-comment"  name="name" placeholder="Add a comment..."></input>
                  <div class="options">
                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                  </div>
                </form>
              </section>
              </div>
              {{-- Section C Ends --}}
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
          <div class='cardee b'>
            {{-- Section A --}}
            <div class="card-header">
              <div class="profile-img"></div>
              <div class="profile-info">
                <div class="name"></div>
                <div class="location">
                  <a href="#">Moss Point, Mississippi</a>
                </div>
              </div>
            </div>
            {{-- Section A Ends --}}

            {{-- Section B --}}
            <div class="content">
              {{-- <img src="/storage/cover_img/{{ $post->cover_img }}" /> --}}
            </div>
            {{-- Section B Ends --}}

            {{-- Section C --}}
            <div class="card-footer">
              <section class="deew12">
                <a class="heart" href="#"><i class="far fa-heart"></i></i></a>
                <a class="bubble" href="#"><i class="far fa-comment"></i></a>
              </section>
              <section class="likes">
                <div class="cuantas-likes"><span>0</span> Likes</div>
              </section>
              <div class="comments">
                <ul id="items" class="list-group">
                  <li class="list-group-item"><span class="friends"></span> <span class="fa-times2"><i class="fa fa-times" aria-hidden="true"></i></span></li>
                </ul>
              </div>
              <div class="time-since">
                <time class="time-hours"><p>1 day ago</p></time>
              </div>
              <section class="form1">
                <form class="textarea1" action="" id="thetext">
                  <input id='item' class="add-comment"  name="name" placeholder="Add a comment..."></input>
                  <div class="options">
                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                  </div>
                </form>
              </section>
              </div>
              {{-- Section C Ends --}}
            </div>
        </div>
    </div>
</section>
@endsection
