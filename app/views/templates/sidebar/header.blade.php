<header>
  <h1>
    <a href="{{URL::action('HomeController@getHome')}}">
      Taxímetro Online
    </a>
  </h1>
  <div class="dropdown dropdown-menu-right pull-right user-dropdown">
    <button class="btn dropdown-toggle
    @if(Auth::check())
      btn-warning
    @endif" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">

      <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
      <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
      @if(!Auth::check())
        <li role="presentation"><a role="menuitem" tabindex="0" href="#" data-toggle="modal" data-target=".sign-in-modal">Entrar</a></li>
        <li role="presentation"><a role="menuitem" tabindex="1" href="#" data-toggle="modal" data-target=".sign-up-modal">Cadastrar</a></li>
      @else
        <li role="presentation"><a role="menuitem" tabindex="0" data-toggle="modal" data-target=".profile-modal">Perfil</a></li>
        <li role="presentation"><a role="menuitem" tabindex="1" href="{{URL::action('UserController@getLogOut')}}">Sair</a></li>
      @endif
    </ul>
  </div>
</header>