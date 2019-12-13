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
    return view('index');
})->name('index');

Route::get('/produtos','ProdutoController@index');
Route::get('/login', [ 'as' => 'login', 'uses' => 'AuthController@login']);
Route::post('/authenticate','AuthController@authenticate');


Route::get('/register', function () {
    return view('user.register');
});
Route::post('/register','AuthController@storeUser');

Route::group(['middleware'=>'auth'],function()
{   
    Route::get('logout', function(){
        Auth::logout();
        return  redirect()->route('index');
    });
    Route::get('/orcamento','OrcamentoController@index')->name('orcamento');
    Route::post('/orcamento/novo', 'OrcamentoController@budget')->name('orcamentoNovo');
    Route::get('/orcamento/novo', 'OrcamentoController@newbudget')->name('orcamentoNovo');
    Route::get('/orcamento/remover/{id}','OrcamentoController@destroy')->name('orcamentoDeletar');
    Route::get('/orcamento/produtos','OrcamentoController@product')->name('orcamentoProdutos');
    Route::get('/orcamento/produto/{id}','OrcamentoController@order')->name('orcamentoAdicionar');
});