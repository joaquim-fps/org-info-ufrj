<!-- modal sign up -->
<div class = "modal fade sign-up-modal">
  <div class = "modal-dialog">
    <div class = "modal-content">
      <div class = "modal-header">
        <button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close">
          <span aria-hidden = "true">&times;</span></button>
        <h4 class = "modal-title text-center">Cadastrar</h4>
      </div>
      <div class = "modal-body">
        <!-- ALERTS -->
        @include('templates.alerts.sign-up')

        <form action = "{{URL::action("UserController@postSignUp")}}" method = "post" class = "sign-up-form-modal">
          <div class = "form-group">
            <label class = "control-label" for = "email">Email:</label>
            <input class = "form-control" type = "email" id = "email" name = "email" placeholder="user@email.com" value = "{{{Input::old('email')}}}">
          </div>

          <div class = "form-group">
            <label class = "control-label" for = "password">Senha:</label>
            <input class = "form-control" type = "password" id = "password" name = "password" value = "">
          </div>

          <div class = "form-group">
            <label class = "control-label" for = "password_confirmation">Confirmar senha:</label>
            <input class = "form-control" type = "password" id = "password_confirmation" name = "password_confirmation">
          </div>

          <input type = "submit" class = "btn btn-warning" value = "Cadastrar">
        </form>
      </div>
      <!-- /.modal-body -->
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.sign-up-modal -->
