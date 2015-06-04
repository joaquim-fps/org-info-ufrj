<!-- modal perfil -->
<div class = "modal fade profile-modal">
  <div class = "modal-dialog">
    <div class = "modal-content">
      <div class = "modal-header">
        <button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close">
          <span aria-hidden = "true">&times;</span>
        </button>
        <h4 class = "modal-title text-center">Perfil</h4>
      </div>
      <div class = "modal-body">
        <!-- ALERTS -->
        @include('templates.alerts.profile')

        <form action = "{{URL::action("UserController@postChangeProfile")}}" method = "post" class = "profile-form-modal">
          <div class="form-group">
            <label class="control-label" for="email-profile">Email:</label>
            <input class="form-control" type="email" id="email-profile" name="email-profile" value="{{{Auth::user()->email}}}"/>
          </div>

          <div class="form-group">
            <label class="control-label" for="name">Nome:</label>
            <input class="form-control" type="text" id="name" name="name" value="{{{Auth::user()->name}}}"/>
          </div>

          <button class="btn btn-danger pull-right" type="button" onclick="showPasswordRecoveryModal(); return false;">Trocar senha</button>
          <button class="btn btn-info pull-right" type="button" onclick="showSearchesModal('{{URL::action('SearchController@getLastUserSearches')}}'); return false;">Últimas pesquisas</button>
          <input type = "submit" class = "btn btn-warning" value = "Salvar">
        </form>
      </div>
      <!-- /.modal-body -->
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div><!-- /.sign-up-modal -->