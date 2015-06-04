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
    @include('templates.sidebar.directions-form')
    @include('templates.sidebar.results')
    @include('templates.sidebar.observations')
  </div>

  <!-- Modals -->
  @if(!Auth::check())
    @include('templates.modals.sign-in')
    @include('templates.modals.sign-up')
  @else
    @include('templates.modals.profile')
    @include('templates.modals.last-searches')
    @include('templates.modals.password-recovery')
  @endif

  @include('templates.modals.user-confirmation')

  <div class="container-fluid">
    <!-- Mapa -->
    <div class="col-md-8 col-lg-9 map-container">
      <div id="map-canvas"></div>
    </div><!-- /.map-container -->
  </div><!-- /.container-fluid -->
@stop

@section('js')
  {{HTML::script('js/maps/initialize.js')}}
  {{HTML::script('js/maps/displayTarifa.js')}}
  {{HTML::script('js/maps/calcRoute.js')}}
  {{HTML::script('js/maps/calcTarifa.js')}}
  {{HTML::script('js/maps/reverseRoute.js')}}

  @if(!Auth::check())
    {{HTML::script('js/modals/signInValidation.js')}}
    {{HTML::script('js/modals/signUpValidation.js')}}
  @else
    {{HTML::script('js/modals/changeProfileValidation.js')}}
    {{HTML::script('js/modals/showSearchesModal.js')}}
    {{HTML::script('js/modals/showPasswordRecoveryModal.js')}}
    {{HTML::script('js/modals/passwordRecoveryValidation.js')}}
  @endif

  @if(Session::has('profile_change_successful') || Session::has('profile_change_failed'))
    {{HTML::script('js/modals/showProfileModal.js')}}
  @endif

  @if(Session::has('password_recovery_successful') || Session::has('password_recovery_failed'))
    <script>
      showPasswordRecoveryModal();
    </script>
  @endif

  @if(Session::has('sign_up_succeeded') || Session::has('activation_succeded'))
    {{HTML::script('js/modals/showConfirmationModal.js')}}
  @endif

  @if(Session::has('sign_up_failed'))
    {{HTML::script('js/modals/showSignUpModal.js')}}
  @endif

  @if(Session::has('login_failed'))
    {{HTML::script('js/modals/showSignInModal.js')}}
  @endif
@stop