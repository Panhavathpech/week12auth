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

Route::get('/', 'HomeController@index')->name('home')->middleware('html_compress');
Route::get('/about', 'HomeController@about')->name('about')->middleware('html_compress');
Route::get('/team', 'HomeController@team')->name('team')->middleware('html_compress');
Route::get('/testimonials', 'HomeController@testimonials')->name('testimonials')->middleware('html_compress');
Route::get('/services', 'HomeController@services')->name('services')->middleware('html_compress');
Route::get('/portfolio', 'HomeController@portfolio')->name('portfolio')->middleware('html_compress');
Route::get('/pricing', 'HomeController@pricing')->name('pricing')->middleware('html_compress');
Route::get('/blog', 'HomeController@blog')->name('blog')->middleware('html_compress');
Route::get('/contact', 'HomeController@contact')->name('contact')->middleware('html_compress');
Route::get('/blogsingle', 'HomeController@blogsingle')->name('blogsingle')->middleware('html_compress');
Route::get('/auth/login', 'HomeController@login')->name('login')->middleware('html_compress');
Route::get('/auth/register', 'HomeController@register')->name('register')->middleware('html_compress');

Route::group([
    'prefix' => 'categories',
    'middleware' => 'html_compress',
], function() {

    Route::get('', 'CategoryController@index')->name('category.index');
    Route::get('/create', 'CategoryController@create')->name('category.create');
    Route::post('', 'CategoryController@store')->name('category.store');
    Route::get('/{id}/edit', 'CategoryController@edit')->name('category.edit');
    Route::put('/{id}/update', 'CategoryController@update')->name('category.update');
    Route::delete('/{id}/delete', 'CategoryController@delete')->name('category.delete');
    Route::delete('/{id}/delete-ajax', 'CategoryController@deleteAjax')->name('category.deleteAjax');

});

Route::group([
    'prefix' => 'posts',
    'middleware' => 'html_compress',
], function() {

    Route::get('', 'PostController@index')->name('post.index');
    Route::get('/create', 'PostController@create')->name('post.create');
    Route::post('', 'PostController@store')->name('post.store');
    Route::get('/{id}/show', 'PostController@show')->name('post.show');
    Route::get('/{post}/edit', 'PostController@edit')->name('post.edit');
    Route::put('/{id}/update', 'PostController@update')->name('post.update');
    Route::delete('/{id}/delete', 'PostController@delete')->name('post.delete');
    Route::delete('/{id}/delete-ajax', 'PostController@deleteAjax')->name('post.deleteAjax');

});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
