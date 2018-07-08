@extends('layouts.master')

@section('title')
  Search
@endsection

@section('content')
  <div style="" class="search">

    <h3>Your Search for "{{ Request::input('query') }}"</h3>

    @if (!$users->count())
      <div style="padding-top:15px;">No results found, sorry.</div>
    @else
      <div class="row">
        <div class="col-md-2">
            @foreach ($users as $user)
              @include('user/partials/userblock')
            @endforeach
        </div>
      </div>
    @endif
  </div>
@endsection
