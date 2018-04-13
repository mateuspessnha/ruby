@extends('layout.principal')
@section('conteudo')

  <h1><b>{{ $p->nome }}</b></h1>
  <ul>
    <li>
      <b>Preco:</b> R$ {{ $p->preco }}
    </li>
    <li>
      <b>Descricao:</b> {{ $p->descricao }}
    </li>
  </ul>
@stop
