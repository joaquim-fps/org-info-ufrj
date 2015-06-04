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
        <form action = "{{URL::action("UserController@postChangeProfile")}}" method = "post" class = "sign-in-form-modal">
          <input type = "submit" class = "btn btn-warning" value = "Salvar">
        </form>
      </div>
      <!-- /.modal-body -->
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div><!-- /.sign-up-modal -->