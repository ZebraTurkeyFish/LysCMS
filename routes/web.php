<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomeController@index')->name("main");

Route::get 		('/product'					, 'ProductController@index'			)->name('product');
Route::post 	('/product'					, 'ProductController@store'			)->name('product');
Route::get 		('/product/{id}'			, 'ProductController@show'			)->name('product');
Route::put 		('/product/{id}'			, 'ProductController@update'		)->name('product');
Route::delete 	('/product/{id}'			, 'ProductController@delete'		)->name('product');

Route::post 	('/product/{id}/image' 		, 'ProductImageController@store'	)->name('images');
Route::put 		('/product/{id}/images' 	, 'ProductImageController@update'	)->name('images');
Route::delete 	('/product/image/{id}'		, 'ProductImageController@delete'	)->name('images');

Route::get 		('/category' 				, 'ProductCategoryController@index'	)->name('category');
Route::post 	('/category' 				, 'ProductCategoryController@store'	)->name('category');
Route::get 		('/category/{id}'			, 'ProductCategoryController@show'	)->name('category');
Route::put 		('/category/{id}'			, 'ProductCategoryController@update')->name('category');
Route::delete 	('/category/{id}'			, 'ProductCategoryController@delete')->name('category');

Route::get 		('/messages'				, 'MessagesController@index'		)->name('messages');
Route::get 		('/messages/{id}'			, 'MessagesController@show'			)->name('messages');