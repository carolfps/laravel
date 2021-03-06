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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/collection',function(){
    //$episode = App\Episode::find(1);
    //$actor = App\Actor::find(33);
    //dd($episode->actors->toArray());
    //dd($actor->episodes->pluck('title'));
    // $genre = App\Genre::find(3);
    // dd($genre->movies->pluck('title'));

    $actor = App\Actor::find(1);
    dd($actor->first_name, $actor->favorite_movie->toArray());
});

Route::get('/episodes', 'EpisodeController@index');

Route::get('/filmes/{id}','FilmeController@procurarFilmeId');

Route::get('/filmes/procurar/{nome}','FilmeController@procurarFilmeNome');

Route::get('/filmes','FilmeController@listar');

Route::get('/adicionar-filme','FilmeController@adicionarFilme');

Route::post('/adicionar-filme','FilmeController@adicionarFilmePost');

Route::get('/adicionar-usuario', 'UserController@create');
Route::post('/adicionar-usuario', 'UserController@store');

Route::get('/usuarios', 'UserController@index');

//utilizando autenticação
// Route::get('/usuarios', 'UserController@index')->middleware('auth'); //se nao tem autorizacao redireciona para a página de login

// Route::auth();