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

Route::prefix('/products')->group(function(){
    Route::get ('/', 'App\Http\Controllers\ProductController@index' )->name('products.index');
 });
/*Route::prefix('/produtos')->group(function(){
    Route::get ('/', 'App\Http\Controllers\ProductController@index' )->name('products.index');
    Route::post ('/pesquisa', 'App\Http\Controllers\ProductController@pesquisa' )->name('products.search');

    Route::delete('destroy/{product}', 'App\Http\Controllers\ProductController@destroy')->name('products.destroy');
});*/

#Route::get('/produtos', 'App\Http\Controllers\ProductController@index');