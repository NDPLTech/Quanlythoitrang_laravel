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
//Client
Route::get('/', 'HomeController@home_page')->name('home');
Route::get('/auth', 'AuthController@auth')->name('client.auth');
Route::post('/auth-register', 'AuthController@postAuthRegister')->name('client.postAuthRegister');
Route::post('/auth-login', 'AuthController@postAuthLogin')->name('client.postAuthLogin');
Route::get('/logout', 'AuthController@logout')->name('logout');
Route::get('/blog', 'BlogController@blog')->name('blog');
Route::get('/shop', 'ShopController@shop')->name('shop');
Route::get('/contact', 'ContactController@contact')->name('contact');
Route::get('/cart', 'CartController@cart')->name('cart');

//Admin
Route::get('/admin', 'AdminController@admin')->name('admin');

//-------------------------Danh mục sản phẩm------------------------------------------------------------------
Route::get('/add-category-product', 'CategoryProductController@add_category_product')->name('add-category-product');
Route::get('/edit-category-product/{category_product_id}', 'CategoryProductController@edit_category_product')->name('edit-category-product');
Route::get('/delete-category-product/{category_product_id}', 'CategoryProductController@delete_category_product')->name('delete-category-product');
Route::get('/all-category-product', 'CategoryProductController@all_category_product')->name('all-category-product');

//Ẩn, hiện danh muc
Route::get('/unactive-category-product/{category_product_id}', 'CategoryProductController@unactive_category_product');
Route::get('/active-category-product/{category_product_id}', 'CategoryProductController@active_category_product');


Route::post('/save-category-product', 'CategoryProductController@save_category_product')->name('save-category-product');
Route::post('/update-category-product/{category_product_id}', 'CategoryProductController@update_category_product');



//-----------------------Thương hiệu sản phẩm------------------------------------------------------------------------------
Route::get('/add-brand', 'BrandsController@add_brand')->name('add-brand');
Route::get('/edit-brand/{brand_id}', 'BrandsController@edit_brand')->name('edit-brand');
Route::get('/delete-brand/{brand_id}', 'BrandsController@delete_brand')->name('delete-brand');
Route::get('/all-brand', 'BrandsController@all_brand')->name('all-brand');

//Ẩn, hiện danh muc
Route::get('/unactive-brand/{brand_id}', 'BrandsController@unactive_brand');
Route::get('/active-brand/{brand_id}', 'BrandsController@active_brand');

Route::post('/save-brand', 'BrandsController@save_brand')->name('save-brand');
Route::post('/update-brand/{brand_id}', 'BrandsController@update_brand');










