<div class="user-results" style="margin-top:15px;display:flex;align-items:center;justify-content:space-around;">
  <div class="user-avatar" style="">
    <a style="" href="{{ route('profile.index', ['username' => $user->username]) }}">
      <img style="
      height: 41px;
      width: 41px;
      border-radius: 55%;"
      src="{{ $user->getAvatarUrl() }}" alt="">
    </a>
  </div>

  <div style="margin-bottom:2px;" class="">
    <h4><a style="text-decoration:none;" href="#">{{ $user->getUsernameOrFirstname() }}</a></h4>
  </div>
</div>
