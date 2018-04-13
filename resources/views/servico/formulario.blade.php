@extends('layout.principal')
@section('conteudo')
<h1>Novo Servico</h1>
<form action="/servicos/adiciona" method="post">
  <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
  <div class="form-group">
    <label>Servico: </label>
    <input name="nome" class="form-control"/>
  </div>
  <div class="form-group">
  <label>Descricao: </label>
  <input name="descricao" class="form-control"/>
</div>
<div class="form-group">
<label>Preco: </label>
  <input name="preco" class="form-control">
</div>
<button type="submit" class="btn btn-primay btn-block">Cadastrar</button>
</form>
@stop
