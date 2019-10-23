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
})->name('welcome');

Route::post('/login','HomeController@login');

Route::get('/register','HomeController@register');

Route::get('/logout','HomeController@logout');

Route::get('/ask','HomeController@question');

Route::post('/addquestion','HomeController@addquestion');

Route::get('/fetchquestion','HomeController@fetchquestion');

Route::get('/pyq','HomeController@fetchquestionforpy');

Route::get('/javaq','HomeController@fetchquestionforjava');

Route::get('/cq','HomeController@fetchquestionforc');

Route::get('/answer/{qid}','HomeController@fetchanswers');

Route::get('/addanswer/{qdetails}','HomeController@addanswers');

Route::get('/fetchqna','HomeController@viewanswers');

Route::get('/seequestion',function() {
    return view('question');
});

