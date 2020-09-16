<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', function(){
   return view('welcome');
});

Route::get('contato',['uses'=>'ContatoController@index']);

Route::get('/admin/cursos',['as'=>'admin.cursos', 'uses'=>'Admin\CursoController@index']);

Route::get('/admin/cursos/adcionar',['as'=>'admin.cursos.adcionar', 'uses'=>'Admin\CursoController@adcionar']);

Route::post('/admin/cursos/salvar', ['as'=>'admin.cursos.salvar', 'uses'=>'Admin\CursoController@salvar']);

Route::get('/admin/cursos/atualiar/{id}',['as'=>'admin.cursos.editar', 'uses'=>'Admin\CursoController@editar']);

Route::post('/admin/cursos/editar/{id}', ['as'=> 'admin.cursos.atualizar', 'uses'=>'Admin\CursoController@atualizar']);

Route::get('admin/cursos/deletar/{id}', ['as'=>'admin.cursos.deletar', 'uses'=>'Admin\CursoController@deletar']);



