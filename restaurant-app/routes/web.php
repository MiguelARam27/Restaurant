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

//Admin
Route::get('/admin', 'AdminController@dashboard');

//Admin food category
Route::get('/admin/food-categories', 'admin\FoodCategoriesController@index');
Route::post('/admin/food-categories', 'admin\FoodCategoriesController@store');
Route::get('/admin/food-categories/create', 'admin\FoodCategoriesController@create');
Route::get('/admin/food-categories/{id}/edit', 'admin\FoodCategoriesController@edit');
Route::put('/admin/food-categories/{id}','admin\FoodCategoriesController@update');
Route::get('/admin/food-categories/{id}/delete','admin\FoodCategoriesController@delete');

//Admin food Items
Route::get('/admin/food-items', 'admin\FoodItemsController@index');
Route::get('/admin/food-items/create', 'admin\FoodItemsController@create');
Route::post('/admin/food-items', 'admin\FoodItemsController@store');
Route::get('/admin/food-items/{id}/edit', 'admin\FoodItemsController@edit');
Route::put('/admin/food-items/{id}','admin\FoodItemsController@update');
Route::get('/admin/food-items/{id}/delete','admin\FoodItemsController@delete');

//Admin Customers
//Admin Members
Route::get('/admin/members', 'admin\MembersController@index');
Route::get('/admin/members/create', 'admin\MembersController@create');
Route::get('/admin/members/{id}/edit', 'admin\MembersController@edit');
Route::put('/admin/members/{id}','admin\MembersController@update');
Route::get('/admin/members/{id}/delete','admin\MembersController@delete');
//Admin Reservations
Route::get('/admin/reservations', 'admin\ReservationsController@index');
Route::get('/admin/reservations/{id}/delete', 'admin\ReservationsController@delete');

//Admin Users
Route::get('/admin/users', 'admin\UsersController@index');
Route::get('/admin/users/create', 'admin\UsersController@create');
Route::get('/admin/users/{id}/edit', 'admin\UsersController@edit');
Route::post('/admin/users','admin\UsersController@store');
Route::put('/admin/users/{id}','admin\UsersController@update');
Route::get('/admin/users/{id}/delete','admin\UsersController@delete');

//Static Pages
Route::get('/', 'StaticPagesController@home');
Route::get('/offers/thank-you', 'StaticPagesController@thank_you');
Route::get('/about','StaticPagesController@about');
Route::get('/reservations','StaticPagesController@reservations');
Route::post('/reservations','StaticPagesController@makeReservation');
Route::get('/contact','StaticPagesController@contact');
Route::get('/offers','StaticPagesController@offers');
Route::post('/offers','StaticPagesController@registerMember');
Route::get('/menu','StaticPagesController@menu');
Route::get('/menu/{slug}','StaticPagesController@singleMenu');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
