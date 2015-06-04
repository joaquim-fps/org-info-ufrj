<!-- modal perfil -->
<div class = "modal fade user-confirmation-modal">
  <div class = "modal-dialog">
    <div class = "modal-content">
      <div class = "modal-header">
        <button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close">
          <span aria-hidden = "true">&times;</span>
        </button>
        <h4 class = "modal-title text-center">Ativação de Conta</h4>
      </div>
      <div class = "modal-body">
        @if(Session::has('sign_up_succeeded'))
          <p class="text-center">Cadastro realizado com sucesso!</p>
          <p class="text-center">Um e-mail de confirmação será enviado em breve.</p>
        @elseif(Session::has('activation_succeeded'))
          <p class="text-center">Conta ativada com sucesso!</p>
        @elseif(Session::has('invalid_user'))
          <p class="text-center">Usuário inválido! Conta não foi ativada.</p>
        @elseif(Session::has('invalid_activation_code'))
          <p class="text-center">Código de ativação inválido! Conta não foi ativada.</p>
        @elseif(Session::has('already_active'))
          <p class="text-center">Conta já está ativa!</p>
        @endif
      </div>
      <!-- /.modal-body -->
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div><!-- /.sign-up-modal -->