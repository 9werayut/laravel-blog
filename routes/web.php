<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', 'SiteController@index')->name('about');

Route::get('typebooks', 'TypeBooksController@index')->name('typebooks');
Route::get('typebooks/destroy/{id}', 'TypeBooksController@destroy');

//rename index method is books
Route::resource('books', 'BooksController')->name('index', 'books');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
