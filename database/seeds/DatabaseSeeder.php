<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Model::unguard();
      $this->call(ServicoTableSeeder::class);
    }
}

class ServicoTableSeeder extends Seeder
{

  public function run()
  {
    DB:: insert('insert into servicos
    (nome, descricao, preco)
    values (?,?,?)',
  array ('Aula de Ingles', 'Aulas voltadas para brasileiros adultos', 100.31);

  DB:: insert('insert into servicos
  (nome, descricao, preco)
  values (?,?,?)',
array ('Aula de Portugues', 'Aulas voltadas para extrangeiros adultos', 100.37);

DB:: insert('insert into servicos
(nome, descricao, preco)
values (?,?,?)',
array ('Traducao', 'Por palavra', 1.01);

  }
}
