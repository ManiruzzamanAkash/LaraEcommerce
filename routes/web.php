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
Route::get('/','frontend\PagesController@index')->name('index');
Route::get('/contact','frontend\PagesController@contact')->name('contact');
Route::get('/about','frontend\PagesController@about')->name('about');
Route::get('/products','frontend\ProductsController@index')->name('products');
Route::get('/products/{slug}','frontend\ProductsController@show')->name('products.show');
Route::get('/search','frontend\PagesController@search')->name('search');
//admin routes
Route::group(['prefix' => 'admin'],function()
             {
                 Route::get('/','backend\PagesController@index')->name('admin.index');
        //product routes         
    Route::group(['prefix' => '/product'],function()
             {
                 Route::get('/','backend\ProductsController@index')->name('admin.products');
                 Route::get('/create','backend\ProductsController@create')->name('admin.product.create');
                 Route::get('/edit/{id}','backend\ProductsController@edit')->name('admin.product.edit');
                 
                 Route::post('/create','backend\ProductsController@store')->name('admin.product.store');
                 Route::post('/product/edit/{id}','backend\ProductsController@update')->name('admin.product.update');
                 Route::post('/product/delete/{id}','backend\ProductsController@delete')->name('admin.product.delete');
                 
                  });
                 //category routes
                 Route::group(['prefix' => '/Categories'],function()
             {
                 Route::get('/','backend\CategoriesController@index')->name('admin.categories');
                 Route::get('/create','backend\CategoriesController@create')->name('admin.category.create');
                 Route::get('/edit/{id}','backend\CategoriesController@edit')->name('admin.category.edit');
                 
                 Route::post('/create','backend\CategoriesController@store')->name('admin.category.store');
                 Route::post('/category/edit/{id}','backend\CategoriesController@update')->name('admin.category.update');
                 Route::post('/category/delete/{id}','backend\CategoriesController@delete')->name('admin.category.delete');
                 
                  });
                 //division
                   Route::group(['prefix' => '/divisions'],function()
             {
                 Route::get('/','backend\DivisionsController@index')->name('admin.divisions');
                 Route::get('/create','backend\DivisionsController@create')->name('admin.divisions.create');
                 Route::get('/edit/{id}','backend\DivisionsController@edit')->name('admin.divisions.edit');
                 
                 Route::post('/create','backend\DivisionsController@store')->name('admin.divisions.store');
                 Route::post('/divisions/edit/{id}','backend\DivisionsController@update')->name('admin.divisions.update');
                 Route::post('/divisions/delete/{id}','backend\DivisionsController@delete')->name('admin.divisions.delete');
                 
                  });
                 
                   //district
                   Route::group(['prefix' => '/districts'],function()
             {
                 Route::get('/','backend\DistrictsController@index')->name('admin.districts');
                 Route::get('/create','backend\DistrictsController@create')->name('admin.districts.create');
                 Route::get('/edit/{id}','backend\DistrictsController@edit')->name('admin.districts.edit');
                 
                 Route::post('/create','backend\DistrictsController@store')->name('admin.districts.store');
                 Route::post('/districts/edit/{id}','backend\DistrictsController@update')->name('admin.districts.update');
                 Route::post('/districts/delete/{id}','backend\DistrictsController@delete')->name('admin.districts.delete');
                 
                  });
             });



//Route::get('/', function () {
   // return view('welcome');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
