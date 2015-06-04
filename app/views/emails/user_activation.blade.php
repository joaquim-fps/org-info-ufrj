@extends('templates.main')

@section("title")
  Ativação de Usuario
@stop

@section("content")
  Olá, bem vindo ao Taxímetro Online!
  <br><br>

  Para ativar sua conta de usuário clique no link abaixo.
  <br><br>

  Ativar: {{$link_prefix.$id.'/'.$activation_code}}
  <br><br>
@stop
