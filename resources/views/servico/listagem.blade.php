@extends('layout.principal')
@section('conteudo')

@if(empty($servicos))
<div class="container">Sem servicos cadastrados ate o momento.</div>

@else
  <h1>Lista de Servicos</h1>
  <table class="table table-striped table-bordered table-hover">
    <tr>
      <th>Nome</th>
      <th>Preco</th>
      <th>Descricao</th>
    </tr>
    @foreach ($servicos as $p)
      <tr class="{{$p->preco<=1 ? 'danger' : '' }}">
        <td>{{ $p->nome }}</td>
        <td>{{ $p->preco }}</td>
        <td>
          <a href="/servicos/mostra/{{ $p->id }}">
            <span class="glyphicon glyphicon-search"></span>
          </a></td>
      </tr>
    @endforeach
    </table>
  @endif
  <h4>
    <span class="label label-danger pull-right">
      Servico com valor negativo.
    </span>
  </h4>
@stop
