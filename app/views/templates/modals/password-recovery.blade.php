<!-- modal perfil -->
<div class = "modal fade password-recovery-modal">
  <div class = "modal-dialog">
    <div class = "modal-content">
      <div class = "modal-header">
        <button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close">
          <span aria-hidden = "true">&times;</span>
        </button>
        <h4 class = "modal-title text-center">Trocar senha</h4>
      </div>
      <div class = "modal-body">
        @if(Session::has('password_recovery_successful'))
          <p class="text-center">Senha alterada com sucesso!</p>
        @else
          <!-- ALERTS -->
          @include('templates.alerts.password-recovery')

          <form action = "{{URL::action("UserController@postPasswordRecovery")}}" method = "post" class = "password-recovery-form-modal">
            <div class="form-group">
              <label class="control-label" for="current-password">Senha atual:</label>
              <input class="form-control" type="password" id="current-password" name="current-password" value=""/>
            </div>

            <div class="form-group">
              <label class="control-label" for="new-password">Nova senha:</label>
              <input class="form-control" type="password" id="new-password" name="new-password" value=""/>
            </div>

            <div class="form-group">
              <label class = "control-label" for = "new-password_confirmation">Confirmar nova senha:</label>
              <input class = "form-control" type = "password" id="new-password_confirmation" name="new-password_confirmation" value=""/>
            </div>

            <input type = "submit" class = "btn btn-warning" value = "Trocar">
          </form>
        @endif
      </div>
      <!-- /.modal-body -->
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div><!-- /.sign-up-modal -->