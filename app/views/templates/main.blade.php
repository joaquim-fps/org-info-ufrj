<!doctype html>
<html lang = "pt-BR">
  <head>
    <meta charset = "UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    {{HTML::style('libs/bootstrap/css/bootstrap.min.css')}}
    {{HTML::style('css/all.min.css')}}

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    @yield('css')

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&signed_in=true"></script>
  </head>
  <body>
    @include('templates.header')

    @yield('content')

    @include('templates.footer')

    {{HTML::script('libs/jquery/jquery.min.js')}}
    {{HTML::script('libs/bootstrap/js/bootstrap.min.js')}}
    {{HTML::script('js/all.min.js')}}
    @yield('js')
  </body>
</html>