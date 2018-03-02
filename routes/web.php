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
    return view('front/welcome');
});

Route::auth();

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => ['web']], function () {
    //
});


// Route::get('home', function(){
// 	return view('front/home');
// });


Route::get('/about', function (){
	return view('front/about');
});


Route::get('/shop', 'HomeController@shop');

// Route::get('/shop', function (){
// 	return view('front/shop');
// });


# Route for products
Route::get('/products', function (){
	return view('front/shop');
});

#Route for contact us page
Route::get('/contact', function(){
	return view('front/contact');
});


Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function(){
		
		Route::get('/', function(){ return view('admin.index');})->name('admin.index');

		Route::POST('admin/store', 'AdminController@store');

		Route::get('/admin', 'AdminController@index');

		Route::get('/product', 'ProductsController@index');
		
	}
);

Route::get('/product-detail/{id}', 'HomeController@product_detail');

Route::get('/cart', 'CartController@index');

Route::get('/cart/addItem{id}', 'CartController@addItem');












