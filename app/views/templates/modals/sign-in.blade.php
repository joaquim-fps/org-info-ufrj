<!-- modal sign in -->
<div class = "modal fade sign-in-modal">
  <div class = "modal-dialog">
    <div class = "modal-content">
      <div class = "modal-header">
        <button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close">
          <span aria-hidden = "true">&times;</span>
        </button>
        <h4 class = "modal-title text-center">Entrar</h4>
      </div>
      <div class = "modal-body">
        <!-- ALERTS -->
        @include('templates.alerts.sign-in')

        <form action = "{{URL::action("UserController@postLogIn")}}" method = "post" class = "sign-in-form-modal">
          <div class = "form-group">
            <label class = "control-label" for = "email">Email:</label>
            <input class = "form-control" type = "email" id = "email-sign-in" name = "email-sign-in" placeholder = "user@email.com" value = "{{{Input::old('email-sign-in')}}}">
          </div>

          <div class = "form-group">
            <label class = "control-label" for = "password">Senha:</label>
            <input class = "form-control" type = "password" id = "password-sign-in" name = "password-sign-in" value = "">
          </div>

          <input type = "submit" class = "btn btn-warning" value = "Entrar">
        </form>
      </div>
      <!-- /.modal-body -->
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div><!-- /.sign-up-modal -->