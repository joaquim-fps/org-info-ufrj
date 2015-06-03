@extends('templates.main')

@section('title')
  Taxímetro Online
@stop

@section('css')

@stop

@section('content')
  <div class="container-fluid">
    <div class="col-md-3 side-bar">
      <h1>Taxímetro Online</h1>

      <!-- Input da rota -->
      <form action="#" method="GET">
        <div>
          <label for="origem">Origem:</label>
          <input type="text" name="origem" id="origem" value="Meier, RJ">
        </div>
        <div>
          <label for="destino">Destino:</label>
          <input type="text" name="destino" id="destino" value="Centro, RJ">
        </div>

        <button type="button" onclick="calcRoute(); return false;">Calcular!</button>
      </form>

      <!-- Mostra os resultados -->
      <div id="resultados">
        <p>Distancia: <span id="displayDistancia"></span></p>
        <p>Tarifa estimada: <span id="displayTarifa"></span></p>
      </div>
    </div>
    <div class="col-md-9 map-container">
      <!-- Mapa -->
      <div id="map-canvas"></div>
    </div>
  </div>
@stop

@section('js')
  {{HTML::script('js/initialize.js')}}
  {{HTML::script('js/calcRoute.js')}}
  {{HTML::script('js/calcTarifa.js')}}
@stop