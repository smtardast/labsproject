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

Route::get('/', 'HomepageController@index')->name('home');

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

Route::get('/services','ServicepageController@index')->name('services');




//Users

Route::resource('/user', 'UserController');

//Profile

Route::resource('/profile', 'ProfileController');

//Article

Route::resource('/article', 'ArticleController');
Route::put('/article/{article}/validate', 'ArticleController@validationArticle')->name('validate.article');
//Category

Route::resource('/category', 'CategoryController');

//Clients

Route::resource('/client','ClientController');

//Comments

Route::resource('/comment', 'CommentController');

//Services

Route::resource('/service', 'ServiceController');

//Projects

Route::resource('/project', 'ProjectController');

//Carousel

Route::resource('/carousel', 'CarouselController');

//Newsletter

Route::resource('/newsletter', 'NewsletterController');

//Contact

Route::resource('/question/contact', 'ContactController');


