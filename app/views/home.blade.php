@extends('templates.main')

@section('title')
  Taxímetro Online
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
  @if(Session::has('profile_change_successful') || Session::has('profile_change_failed'))
    <script>
      showProfileModal();
    </script>
  @endif

  @if(Session::has('password_recovery_successful') || Session::has('password_recovery_failed'))
    <script>
      showPasswordRecoveryModal();
    </script>
  @endif

  @if(Session::has('sign_up_succeeded') || Session::has('activation_succeded'))
    <script>
      showConfirmationModal();
    </script>
  @endif

  @if(Session::has('sign_up_failed'))
    <script>
      showSignUpModal();
    </script>
  @endif

  @if(Session::has('login_failed'))
    <script>
      showSignInModal();
    </script>
  @endif
@stop