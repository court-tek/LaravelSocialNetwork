@extends('layouts.child')

@section('title') Timeline
@endsection

@section('content')
<div class="container-for-all">{{-- Instafaux Main Starts --}}
  @foreach ($posts as $post)
  <article class='cardee b' data-postid="{{ $post->id }}">{{-- The CARD starts here --}}
    <header class="card-header">
      <!-- Header of the Card -->
      <div class="ui-face">
        <img src="https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg" alt="">
      </div>
      <div class="user-name1">
        <a href="#">{{ $post->user->username }}</a>
      </div>
    </header>
    <!-- Header of the Card ends -->
    <div class="content">{{-- body image --}}
      <img src="/storage/cover_img/{{ $post->cover_img }}" />
    </div>{{-- body image ends --}}
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
          <li class="authDescription">
            <span class="userN">
                  {{ $post->user->username }}
                </span> {{ $post->body }}
            <span class="fa-times2">
                  <i class="fa fa-times" aria-hidden="true"></i>
                </span>
          </li>
          {{-- @foreach ($post->comments as $comment)
          <li class="usersComments">
            <span class="people">
                  {{ $post->user->user_id }}
                </span> {{ $comment->body }}
            <span class="fa-times3">
                  <i class="fa fa-times" aria-hidden="true"></i>
                </span>
          </li>
          @endforeach --}}
        </ul>
      </div>
      <div class="time-since">
        <time class="time-hours"><p>{{ $post->created_at->diffForHumans() }}</p></time>
      </div>
      <section class="form1">
        <form class="textarea1" method="POST" id="comment_form">
          <input type="text" id='add_comment' class="add-comment" name="comment_body" placeholder="Add a comment...">

          <input type="hidden" value="{{ Session::token() }}" name="_token">
          <input type="hidden" value="{{ $post->id }}" name="postId">
          {{-- <input type="hidden" value="{{ $post->id }}" name=""> --}}

          <button type="button" style="border:none;" id="comment_post " name="button">Post</button> {{-- <input type="hidden" name="_token" value="{{ Session::token() }}"> --}}
          <div class="options">
            <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
          </div>
        </form>
      </section>
    </div>{{-- Footer area ends here --}}
  </article>{{-- CARDee b ends here --}}
  @endforeach
</div>{{-- Instfaux main ends here --}}

<script>
  var token = "{{ Session::token() }}";
  var url = "{{ route('comment') }}"
</script>
@endsection
