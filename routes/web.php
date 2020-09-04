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

Auth::routes();

Route::get('/', 'SiteController@index');

Route::middleware(['auth'])->group(function () {
    Route::namespace('Admin')->group(function () {

        Route::get('/home', 'HomeController@index')->name('home');

        /** Cardapio **/
        Route::prefix('cardapio')->group(function () {
            Route::get('/', 'CardapioController@index')->name('cardapio');
            Route::get('/adicionar', 'CardapioController@create')->name('cardapio.create');
            Route::post('/adicionar', 'CardapioController@store')->name('cardapio.store');
            Route::get('/info/{cardapio}', 'CardapioController@show')->name('cardapio.show');
            Route::get('/editar/{cardapio}', 'CardapioController@edit')->name('cardapio.edit');
            Route::put('/editar/{cardapio}', 'CardapioController@update')->name('cardapio.update');
            Route::delete('/deletar/{cardapio}', 'CardapioController@destroy')->name('cardapio.destroy');
        });

        /** categoria **/
        Route::prefix('categoria')->group(function () {
            Route::get('/', 'CategoriaController@index')->name('categoria');
            Route::get('/adicionar', 'CategoriaController@create')->name('categoria.create');
            Route::post('/adicionar', 'CategoriaController@store')->name('categoria.store');
            Route::get('/info/{categoria}', 'CategoriaController@show')->name('categoria.show');
            Route::get('/editar/{categoria}', 'CategoriaController@edit')->name('categoria.edit');
            Route::put('/editar/{categoria}', 'CategoriaController@update')->name('categoria.update');
            Route::delete('/deletar/{categoria}', 'CategoriaController@destroy')->name('categoria.destroy');
        });

    });
});
