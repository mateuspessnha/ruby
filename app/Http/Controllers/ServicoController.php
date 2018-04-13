<?php namespace ruby\Http\Controllers;

use Illuminate\Support\Facades\DB;
use ruby\Servico;
use Request;

class ServicoController extends Controller {
  public function lista(){

    $servicos = DB::select('select id, nome, descricao, preco from servicos order by nome');

    return view('servico.listagem')->with('servicos', $servicos);

  }

  public function mostra($id){
    $resposta = DB::select('select id, nome, descricao, preco from servicos where id = ?',[$id]);

    if(empty($resposta)){
      return "Esse servico nao existe.";
    }
    return view('servico.descricao')->with('p', $resposta[0]);
  }

  public function novo()
  {
    return view('servico.formulario');
  }

  public function adiciona()
  {
    $nome = Request::input('nome');
    $descricao = Request::input('descricao');
    $preco = Request::input('preco');

    DB::insert('insert into servicos
    (nome, descricao, preco) values (?,?,?)',
    array($nome, $descricao, $preco));

    return view('servico.adicionado')->with('nome', $nome);
  }
}
