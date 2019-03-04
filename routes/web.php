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



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

//FRONTEND
Route::resource('/blogpage','BlogpageController');

// Route::get('/blogpost/{blogpage}','BlogpageController@show')->name('blogpost');

Route::get('/contact', 'ContactpageController@index')->name('contact');

Route::get('/services','ServicepageController@index')->name('services');




//Users

Route::resource('/user', 'UserController');

//Profile

Route::resource('/profile', 'ProfileController');

//Article

Route::resource('/article', 'ArticleController');
Route::put('/article/{article}/validate', 'ArticleController@validationArticle')->name('validate.article');

//Article filters

Route::get('/blogpage/category/{blogpage}','BlogpageController@categoryFilter')->name('filterCategories');

Route::get('/blogpage/tag/{blogpage}','BlogpageController@tagFilter')->name('filterTags');

Route::post('/blogpage/search','BlogpageController@search')->name('search');



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

//edit content
Route::resource('/homecontent', 'HomepageController');
Route::resource('/contactcomponent', 'ContactcomponentController');
Route::resource('/servicepage', 'ServicepageController');


//tags

Route::resource('/tag', 'TagController');