@if($errors->has("email"))
  <div class = "alert alert-danger alert-dismissible fade in" role = "alert">
    <button type = "button" class = "close" data-dismiss = "alert" aria-label = "Close">
      <span aria-hidden = "true">&times;</span>
    </button>
    {{{$errors->first("email")}}}
  </div>
@endif

@if($errors->has("password"))
  <div class = "alert alert-danger alert-dismissible fade in" role = "alert">
    <button type = "button" class = "close" data-dismiss = "alert" aria-label = "Close">
      <span aria-hidden = "true">&times;</span>
    </button>
    {{{$errors->first("password")}}}
  </div>
@endif

@if($errors->has("password_confirmation"))
  <div class = "alert alert-danger alert-dismissible fade in" role = "alert">
    <button type = "button" class = "close" data-dismiss = "alert" aria-label = "Close">
      <span aria-hidden = "true">&times;</span>
    </button>
    {{{$errors->first("password_confirmation")}}}
  </div>
@endif