@extends('layouts.master')

@section('title')
  Login
@endsection


@section('content')
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
  {{-- <div class="hola">Hello</div> --}}
  <div class="signIn">
    <div class="card">
      <h1>Instafaux</h1>
      <form action="{{ route('signin') }}" method="post">
        <div class="form-pack {{ $errors->has('email') ? 'has-error' : '' }}">
            <input type="text" name="email" id="email" placeholder="  Email" value="{{ Request::old('email') }}">
        </div>
        <div class="form-pack {{ $errors->has('password') ? 'has-error' : '' }}">
            <input type="text" name="password" id="password" placeholder="  Password" value="{{ Request::old('password') }}">
        </div>
        <button type="submit" class="_login btn" id="btn1">Log In</button>
        <input type="hidden" name="_token" value="{{ Session::token() }}">
      </form>
    </div>

    <div class="noAccount row">
      <p>Don't have an account?
      <a class="signUp" href="#">Sign up</a>
      </p>
    </div>
  </div>



  <div class="sign-Up visible-md">
    <div class="card">
      <h1>Instaclone</h1>
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
        <input type="submit" class="_signup btn" placeholder="Sign Up"></input>
        <input type="hidden" name="_token" value="{{ Session::token() }}">
      </form>
    </div>

    <div class="hasAccount row">
      <p>Have an account?
      <a class="logIn" href="#">Log in</a>
      </p>
    </div>
  </div>
@endsection
