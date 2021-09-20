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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/articles', function () {
    return view('articles');
});

Route::get('/articles', 'ArticleController@showAll');

Route::get('/articleCreate', function () {
    return view('articleCreate');
});

Route::post('/articleCreate', 'ArticleController@create');

Route::get('/article/{id}', 'ArticleController@view');

Route::delete('/article/{id}', 'ArticleController@delete');
?>