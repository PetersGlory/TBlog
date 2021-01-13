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
//Pages Section
Route::get('/', 'pagesController@index');

Route::get('/profile', 'pagesController@profile');
// Route::get('/adverts', 'pagesController@advert');
Route::get('/contact', 'pagesController@contact');
// Route::post('contacts', ['uses' => 'pagesController@contacts']);
Route::get('/howitworks', 'pagesController@about');
Route::get('/edu', 'pagesController@edu');
Route::get('/entertainment', 'pagesController@enter');
Route::get('/news', 'pagesController@news');
Route::get('/tech', 'pagesController@tech');
Route::get('/send/email', 'pagesController@contacts');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('articles', 'ArticlesController');
Route::resource('adverts', 'AdvertsController');

// Admin Section
Route::get('/TBlog', 'AdminController@index');
Route::get('/admin_login', 'AdminController@login');
Route::post('/aLog', ['uses'=> 'AdminController@aLog']);
Route::get('/areg', 'AdminController@AdminR');
Route::get('/admin_create', 'AdminController@create');
Route::post('/Areg', ['uses'=> 'AdminController@aReg']);
Route::get('/admin/articles/{id}', 'AdminController@show');
// Route::post('/articles/{id}/adminD', ['uses'=>'AdminController@destroy']);
// Route::post('/adminE/articles/{id}/edit', ['uses'=>'AdminController@edit']);