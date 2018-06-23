@extends('layouts.welcomePage')

@section('title')
  Login
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

    <div id="weclome-container">{{-- welcome container --}}
      <h1>Welcome to Instafaux</h1>
      <h3>The Coolest Social Network</h3>
      <p>Login Here</p>
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
        <br>
        <hr>
        <br>
       <p>Don't have an account?
     </p>
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
   </div>{{-- Welcome Container ends --}}
@endsection
