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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/team', 'HomeController@team')->name('team');
Route::get('/testimonials', 'HomeController@testimonials')->name('testimonials');
Route::get('/services', 'HomeController@services')->name('services');
Route::get('/portfolio', 'HomeController@portfolio')->name('portfolio');
Route::get('/pricing', 'HomeController@pricing')->name('pricing');
Route::get('/blog', 'HomeController@blog')->name('blog');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/blogsingle', 'HomeController@blogsingle')->name('blogsingle');
Route::get('/auth/login', 'HomeController@login')->name('login');
Route::get('/auth/register', 'HomeController@register')->name('register');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
