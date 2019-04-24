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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/magazine', 'MagazineController@index')->name('magazine');

Route::group(['middleware' => ['auth']], function () {
    //Route::get('/book', 'BookController@index')->name('book.index');
    //Route::get('/book', 'BookController@index')->name('book.create');
    //Route::get('/book', 'BookController@index')->name('book.destroy');
    Route::get('/home/book', 'BookController@index')->name('book');
    Route::get('/home/magazine', 'MagazineController@index')->name('magazine');
    Route::get('/home/newspaper', 'NewspaperController@index')->name('newspaper');
    Route::get('/home/size', 'SizeController@index')->name('size');
    Route::get('/home/genre', 'GenreController@index')->name('genre');
    Route::resource('book', 'BookController');
    Route::resource('magazine', 'MagazineController');
    Route::resource('newspaper', 'NewspaperController');
    Route::resource('size', 'SizeController');
    Route::resource('genre', 'GenreController');
});


//Route::get('\size', function (\App\Size $size) {
//    var_dump($size->books);
//});