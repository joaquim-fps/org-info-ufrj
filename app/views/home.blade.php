@extends('templates.main')

@section('title')
  Taxímetro Online
@stop

@section('css')
  {{HTML::style('css/map.css')}}
  {{HTML::style('css/sidebar.css')}}
@stop

@section('content')

    <!-- Side bar -->
    <div class="col-md-4 side-bar">
      @include('templates.sidebar.header')
      @include('templates.sidebar.directions-form')
      @include('templates.sidebar.results')
      @include('templates.sidebar.observations')
      @include('templates.sidebar.footer')
    </div>

  <div class="container-fluid">
    <!-- Mapa -->
    <div class="col-md-8 map-container">
      <div id="map-canvas"></div>
    </div><!-- /.map-container -->
  </div><!-- /.container-fluid -->
@stop

@section('js')
  {{HTML::script('js/initialize.js')}}
  {{HTML::script('js/displayTarifa.js')}}
  {{HTML::script('js/calcRoute.js')}}
  {{HTML::script('js/calcTarifa.js')}}
@stop