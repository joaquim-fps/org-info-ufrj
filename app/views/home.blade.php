@extends('templates.main')

@section('title')
  Taxímetro Online
@stop

@section('css')
  {{HTML::style('css/map.css')}}
  {{HTML::style('css/sidebar.css')}}
  {{HTML::style('css/modals.css')}}
@stop

@section('content')
  <!-- Side bar -->
  <div class="col-md-4 col-lg-3 side-bar">
    @include('templates.sidebar.header')
    @include('templates.sidebar.directions-form')
    @include('templates.sidebar.results')
    @include('templates.sidebar.observations')
    @include('templates.sidebar.footer')
  </div>

  <!-- Modals -->
  @if(!Auth::check())
    @include('templates.modals.sign-in')
    @include('templates.modals.sign-up')
  @else
    @include('templates.modals.profile')
  @endif

  <div class="container-fluid">
    <!-- Mapa -->
    <div class="col-md-8 col-lg-9 map-container">
      <div id="map-canvas"></div>
    </div><!-- /.map-container -->
  </div><!-- /.container-fluid -->
@stop

@section('js')
  {{HTML::script('js/initialize.js')}}
  {{HTML::script('js/displayTarifa.js')}}
  {{HTML::script('js/calcRoute.js')}}
  {{HTML::script('js/calcTarifa.js')}}
  {{HTML::script('js/reverseRoute.js')}}
@stop