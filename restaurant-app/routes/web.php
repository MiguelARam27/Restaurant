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


//Admin
Route::get('/admin', 'AdminController@dashboard');
//Admin food category
Route::get('/admin/food-categories', 'admin\FoodCategoriesController@index');
Route::get('/admin/food-categories/create', 'admin\FoodCategoriesController@create');
Route::get('/admin/food-categories/{id}/edit', 'admin\FoodCategoriesController@edit');

//Admin auth
Route::get('/admin/login', function () {
    return view('admin/login');
});
Route::get('/admin/register', function () {
    return view('admin/register');
});
Route::get('/app', function () {
    return view('test');
});

//Static Pages
Route::get('/', 'StaticPagesController@home');
Route::get('/about','StaticPagesController@about');
Route::get('/waitlist','StaticPagesController@waitlist');
Route::get('/contact','StaticPagesController@contact');
Route::get('/offers','StaticPagesController@offers');
Route::get('/menu','StaticPagesController@menu');
Route::get('/menu/{slug}','StaticPagesController@singleMenu');
