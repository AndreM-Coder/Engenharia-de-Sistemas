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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/terms', 'PageController@terms')->name('terms');

// Route::group(['prefix' => 'admin', 'middleware' => 'auth', 'namespace' => 'admin'], function () {
//     Route::resource('meus', 'HomeController@index');
// });
Route::group(['prefix' => 'user', 'middleware' => 'auth'], function () {
  //  Route::resource('produtos/listar', 'HomeController@index')->name('produtos.listar');
    Route::get("produtos", "HomeController@index")->name("user.produtos.listar");
    Route::resource('loja', 'LojaController');
    Route::post("loja-criar", "LojaController@store")->name("user.loja.criar");
    //Route::post("loja-update", "LojaController@update")->name("user.loja.update");    
    Route::resource('produto', 'ProdutoController');
});
