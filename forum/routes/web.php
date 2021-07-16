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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/news', function () {
    return view('client.news');
});



Route::get('/category', function () {
    return view('client.category');
});

Route::get('/topic', function () {
    return view('client.topic');
});

Route::get('dashboard/home', 'App\Http\Controllers\dbdController@home');
Route::get('dashboard/category/new', 'App\Http\Controllers\ctgController@create')->name('category.new');
Route::post('dashboard/category/new', 'App\Http\Controllers\ctgController@store')->name('category.store');
Route::get('dashboard/categories', 'App\Http\Controllers\ctgController@index')->name('categories');
Route::get('dashboard/categories/{id}', 'App\Http\Controllers\ctgController@show')->name('category');
Route::get('dashboard/categories/edit/{id}', 'App\Http\Controllers\ctgController@edit')->name('category.edit');
Route::post('dashboard/categories/edit/{id}', 'App\Http\Controllers\ctgController@update')->name('category.update');
Route::get('dashboard/categories/delete/{id}', 'App\Http\Controllers\ctgController@destroy')->name('category.destroy');


//forum

Route::get('dashboard/forum/new', 'App\Http\Controllers\frController@create')->name('forum.new');
Route::post('dashboard/forum/new', 'App\Http\Controllers\frController@store')->name('forum.store');
Route::get('dashboard/forums', 'App\Http\Controllers\frController@index')->name('forums');
Route::get('dashboard/forums/edit/{id}', 'App\Http\Controllers\frController@edit')->name('forum.edit');
Route::post('dashboard/forums/edit/{id}', 'App\Http\Controllers\frController@update')->name('forum.update');
Route::get('dashboard/forums/delete/{id}', 'App\Http\Controllers\frController@destroy')->name('forum.destroy');