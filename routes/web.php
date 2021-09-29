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

use App\Http\Controllers\Admin\ProductPhotoController;

Route::get('/', 'Site\HomeController@index')->name('site.home');
Route::get('/produto/{slug}','Site\HomeController@single')->name('product.single');
Route::prefix('cart')->name('cart.')->group(function(){
    Route::get('/','Admin\CartController@index')->name('index');
    Route::post('add','Admin\CartController@add')->name('add');
    Route::get('remove/{slug}','Admin\CartController@remove')->name('remove');
    Route::get('cancel','Admin\CartController@cancel')->name('cancel');
});

Route::prefix('checkout')->name('checkout.')->group(function(){
   Route::get('/','Admin\CheckoutController@index')->name('index');
});
Route::prefix('admin')
        ->namespace('Admin')
        ->middleware('auth')
        ->group(function() {
            Route::get('produtos','ProdutoController@index')->name('products.index');
            Route::get('produtos/cadastrar','ProdutoController@create')->name('products.create');
            Route::post('produtos','ProdutoController@store')->name('products.store');
            Route::get('produtos/{produto}/edit','ProdutoController@edit')->name('products.edit');
            Route::post('produtos/{produto}/update','ProdutoController@update')->name('products.update');
            Route::get('produtos/destroy/{produto}','ProdutoController@destroy')->name('products.destroy');
            Route::get('stores','StoreController@index')->name('stores.index');
            Route::get('stores/create','StoreController@create')->name('stores.create');
            Route::post('stores/store','StoreController@store')->name('stores.store');
            Route::get('stores/{store}/edit','StoreController@edit')->name('stores.edit');
            Route::post('stores/{store}/update','StoreController@update')->name('stores.update');
            Route::get('stores/destroy/{store}','StoreController@destroy')->name('stores.destroy');
            Route::resource('categories','CategoryController');
            Route::post('photos/remove','ProductPhotoController@removePhoto')->name('photo.remove');
            });


Auth::routes();
