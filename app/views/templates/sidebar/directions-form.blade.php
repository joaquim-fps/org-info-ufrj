<!-- Input da rota -->
<form action="#" method="GET">
  <div class="form-group">
    <label class="control-label" for="origem">Origem:</label>
    <input class="form-control" type="text" name="origem" id="origem" value="Meier, RJ">
  </div>
  <div class="form-group">
    <label class="control-label" for="destino">Destino:</label>
    <input class="form-control" type="text" name="destino" id="destino" value="Centro, RJ">
  </div>

  <button class="btn btn-warning" type="button" onclick="calcRoute(); return false;">Calcular</button>
</form>