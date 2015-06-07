<!doctype html>
<html lang = "pt-BR">
  <head>
    <meta charset = "UTF-8">
    <title>Ativação de Usuario</title>
  </head>
  <body>
    <header>
      <h1>
        <a href="{{URL::action('HomeController@getHome')}}">
          Taxímetro Online
        </a>
      </h1>
      <br><br>
    </header>
    <div role="main">
      <h3>Olá, bem vindo ao Taxímetro Online!</h3>

      <p>Para ativar sua conta de usuário clique no link abaixo.</p>

      <p><strong>Ativar: {{$link_prefix.$id.'/'.$activation_code}}</strong></p>
    </div>
    <footer>
      <br><br>
      <p class="text-center"><em>Feito por Bruno Ferraz, Joaquim Ferreira e Pedro Aragão.</em></p>
      <p class="text-center"><em>Todos os direitos reservados.</em></p>
    </footer>
  </body>
</html>
