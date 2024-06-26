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

Route::get('/home', 'HomeController@index');

Route::get('/detail/{id}', 'HomeController@detail');

/** OPERATIONS ROUTES */
Route::get('/clients', 'HomeController@index');
Route::get('/', 'HomeController@index');

Route::get('/demandes/{type}', 'HomeController@demandes');
Route::get('/traiter_demande/{id}', 'HomeController@traiter_demande');

Route::post('/save_traitement/', 'HomeController@save_traitement');


/** AUTH ROUTES **/
Auth::routes();
Route::post('/login', 'Auth\LoginController@login');
Route::get('/logout', 'Auth\LoginController@logout');


/** MESSAGES ROUTES */

Route::get('/get_msgs', 'HomeController@get_messages');
Route::get('/new_msgs/','HomeController@new_messages');
Route::get('/view_msg/{id}/{type}','HomeController@view_message');
Auth::routes();


