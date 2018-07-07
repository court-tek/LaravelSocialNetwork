@extends('layouts.welcomePage')

@section('title') Login
@endsection


@section('bible')
@if (count($errors) > 0)
<div>
  <div>
    <ul>
      @foreach ($errors->all() as $error)
      <li class="error">{{$error}}</li>
      @endforeach
    </ul>
  </div>
</div>
@endif
<div class="welcome-box">
  <h1>Instafaux</h1>
  <h3>The Coolest Social Network</h3>
</div>
<div id="weclome-container">{{-- welcome container --}}

  <p class="a">Sign up to see photos from your friends</p>

  <form action="{{ route('signup') }}" method="post" id="theForm" onsubmit="return chk()">
    <div class="form-pack {{ $errors->has('email') ? 'has-error' : '' }}">
      <input type="text" name="email" id="email" placeholder="  Email" value="{{ Request::old('email') }}">
    </div>
    <div class="form-pack {{ $errors->has('firstname') ? 'has-error' : '' }}">
      <input type="text" name="firstname" id="firstname" placeholder="  First Name" value="{{ Request::old('firstname') }}">
    </div>
    <div class="form-pack {{ $errors->has('username') ? 'has-error' : '' }}">
      <input type="text" name="username" id="username" placeholder="  User Name" value="{{ Request::old('username') }}">
    </div>
    <div class="form-pack">
      <input type="text" name="password" id="password" placeholder="  Password">
    </div>
    <input type="submit" class="_signup btn" value="Sign up" />
    <input type="hidden" name="_token" value="{{ Session::token() }}">
  </form>
  <p>By signing up, you agree to our Terms, Data Policy and Cookies Policy.</p>
  <div class="haveAccount">
    <p class="c">
      Have an account?
      <a class="_login" href="#">Log in</a>
    </p>
  </div>

</div>{{-- Welcome Container ends --}}

<div id="welcome2">
  <p class="a">Log in</p>
  <form action="{{ route('signin') }}" method="post">
    <div class="form-pack {{ $errors->has('email') ? 'has-error' : '' }}">
      <input type="text" name="email" id="email" placeholder="  Email" value="{{ Request::old('email') }}">
    </div>
    <div class="form-pack {{ $errors->has('password') ? 'has-error' : '' }}">
      <input type="text" name="password" id="password" placeholder="  Password" value="{{ Request::old('password') }}">
    </div>
    <input type="submit" class="_login btn" value="Log in" id="btn1" />
    <input type="hidden" name="_token" value="{{ Session::token() }}">
  </form>
  <p><a href="#">Forgot password?</a></p>
  <div class="noAccount">
    <p class="c">
      Don't have an account?
      <a class="_signup" href="#">Sign up</a>
    </p>
  </div>
</div>
@endsection
