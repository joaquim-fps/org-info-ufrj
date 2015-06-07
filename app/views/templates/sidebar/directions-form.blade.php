<!-- Input da rota -->
<form action="#" method="GET">
  <div class="form-group">
    <label class="control-label" for="origem">Origem:</label>
    <input class="form-control" type="text" name="origem" id="origem" value="">
  </div>

  <div class="form-group">
    <label class="control-label" for="destino">Destino:</label>
    <input class="form-control" type="text" name="destino" id="destino" value="">
  </div>

  <div class="form-group hora-parada-group">
    <div class="row">
    <input type="checkbox" id="check-hora-parada"/>
    <label class = "control-label" for = "hora-parada">Hora parada:</label>
    </div>
    <div class="col-xs-6">
      <input class = "form-control hidden" type = "number" name="hora-parada" id="hora-parada" placeholder="Horas" value=""/>
    </div>

    <div class="col-xs-6">
      <input class = "form-control hidden" type = "number" name="minuto-parado" id="minuto-parado" placeholder="Minutos" value=""/>
    </div>
  </div>

  <button class="btn btn-warning" type="button" onclick="calcRoute('{{URL::action('SearchController@postCreateSearch')}}'); return false;">Calcular</button>
  <button class="btn btn-info pull-right" type="button" onclick="reverseRoute(); return false;">Inverter</button>
</form>