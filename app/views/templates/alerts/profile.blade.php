@if(Session::has('profile_change_successful'))
  <div class = "alert alert-success alert-dismissible fade in" role = "alert">
    <button type = "button" class = "close" data-dismiss = "alert" aria-label = "Close">
      <span aria-hidden = "true">&times;</span>
    </button>
    Dados alterados com sucesso.
  </div>
@endif

@if($errors->has('email-profile'))
  <div class = "alert alert-danger alert-dismissible fade in" role = "alert">
    <button type = "button" class = "close" data-dismiss = "alert" aria-label = "Close">
      <span aria-hidden = "true">&times;</span>
    </button>
    {{{$errors->first('email-profile')}}}
  </div>
@endif