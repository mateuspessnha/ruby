<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return 'welcome';
});

Route::get('/servicos', 'ServicoController@lista');
Route::get(
  '/servicos/mostra/{id}',
  'ServicoController@mostra'
  )
  -> where('id', '[0-9]+');
Route::get('/servicos/novo', 'ServicoController@novo');
Route::post('/servicos/adiciona', 'ServicoController@adiciona');

?>
