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

Route::get('/', [
    'uses' => 'Frontend\FrontendController@home',
    'as' => 'home',
]);

Route::get('/add', [
   'uses' => 'Frontend\FrontendController@addEvent',
    'as' => 'add.event',
]);

Route::post('/add/submit', [
    'uses' => 'Backend\BackendController@submitEvent',
    'as' => 'submit.event',
]);

Route::get('/calendar', [
    'uses' => 'Frontend\FrontendController@showCalendar',
    'as' => 'calendar.home'
]);