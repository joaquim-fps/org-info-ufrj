@if(Session::has('password_recovery_failed'))
  <div class = "alert alert-danger alert-dismissible fade in" role = "alert">
    <button type = "button" class = "close" data-dismiss = "alert" aria-label = "Close">
      <span aria-hidden = "true">&times;</span>
    </button>
    Senha incorreta, por favor tente de novo.
  </div>
@endif