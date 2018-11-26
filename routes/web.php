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




Route::get('/', 'ProductController@index')->name('dashboard.index');



Route::middleware('auth')->group(function (){

    // Products CRUD

    Route::get('products/create','ProductController@create')->name('products.create');

    Route::post('products/store','ProductController@store')->name('products.store');

    Route::get('products/edit/{product}','ProductController@edit')->name('products.edit');

    Route::patch('products/update/{product}','ProductController@update')->name('products.update');

    Route::delete('products/destroy/{product}','ProductController@destroy')->name('products.destroy');


    //User CRUD

    Route::get('user/edit','HomeController@edit')->name('user.edit');

    Route::post('user/update/{user}','HomeController@update')->name('user.update');

    //message CRUD


});

Route::get('products','ProductController@index')->name('products.index');

Route::post('dynamic_dependent/fetch','DynamicSelectController@fetch')->name('dynamicdependent.fetch');

Route::post('dynamic_dependent/prefetch','DynamicSelectController@prefetch')->name('dynamicdependent.prefetch');

Route::get('123/{abc?}',function(App\Product $abc){
    dd($abc);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


