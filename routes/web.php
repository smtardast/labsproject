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
    return view('welcome');
})->name('home');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

//FRONTEND
Route::get('/blog',function () {
    return view('pages.blog');
})->name('blog');

Route::get('/blogpost',function () {
    return view('pages.blogpost');
})->name('blogpost');

Route::get('/contact',function () {
    return view('pages.contact');
})->name('contact');

Route::get('/services',function () {
    return view('pages.services');
})->name('services');


//BACKEND

//Users

Route::resource('/user', 'UserController');

//Profile

Route::resource('/profile', 'ProfileController');

//Article

Route::resource('/article', 'ArticleController');

//Category

Route::resource('/category', 'CategoryController');