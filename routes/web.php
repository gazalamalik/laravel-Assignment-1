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

Route::get('/', 'PagesController@index');
Route::get('/', 'PagesController@signup');

Route::get('/', 'PagesController@login');
Route::get('/', 'PagesController@ragister');
//Route::get('/', 'PagesController@img1');
//Route::get('/', 'PagesController@img2');



//Route::get('/', 'PagesController@login');
//Route::get('/', 'PagesController@login');

//Route::get('/services', 'PagesController@services');


Route::get('/', function () {
    return view('pages.index');
});
Route::get('/signup', function () {
    return view('pages.signup');
});

Route::get('/login', function () {
    return view('pages.login');
});
Route::get('/ragister', function () {
    return view('pages.ragister');
});
Route::get('/Grid', function () {
    return view('pages.Grid');
});
Route::get('/img1', function () {
    return view('pages.img1');
});
Route::get('/img2', function () {
    return view('pages.img2');
});
Route::get('/img3', function () {
    return view('pages.img3');
});
Route::get('/img4', function () {
    return view('pages.img4');
});




