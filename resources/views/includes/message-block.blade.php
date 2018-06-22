@if (count($errors) > 0)
  <div>
      <div class="error">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{$error}}</li>
            @endforeach
          </ul>
      </div>
  </div>
@endif
@if (Session::has('message'))
  <div>
      <div class="success">
        {{Session::get('message')}}
      </div>
  </div>
@endif
