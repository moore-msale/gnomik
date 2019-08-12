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

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', 'MainController@index');

Route::get('/gallery', function () {
    return view('gallery',['galleries' => \App\Gallery::all()]);
});

Route::get('/photo', 'PageController@photo');
Route::post('/photo', 'PageController@photoCreate');

Route::get('gallery/{id}', 'PageController@gallery')->name('gallery');

Route::get('/lessons', function () {
    return view('lessons');
});


// Ajax запрос в Controller
Route::post('/mail', 'MailController@mail')->name('mail');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
