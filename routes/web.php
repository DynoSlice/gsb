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
    return view('auth.login');
});

Auth::routes();

Route::resource('frais','FraisController');
Route::resource('pressing','PressingController');
Route::resource('hebergement','HebergementController');
Route::resource('article', 'ArticleController');
Route::resource('competence', 'CompetenceController');
Route::resource('gestion', 'FraigestionController');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('create', 'FraisController@create');
Route::get('listmission', 'FraisController@index');

Route::get('pressing', 'PressingController@create');
Route::get('listpressing', 'PressingController@index');


Route::get('hebergement', 'HebergementController@create');
Route::get('listhebergement', 'HebergementController@index');

Route::get('listsalarie', 'Auth\RegisterController@index');


Route::get('article', 'ArticleController@create');

Route::get('competence', 'CompetenceController@create');
Route::get('profil', 'CompetenceController@index');

Route::get('gestion', 'FraigestionController@index');
Route::get('traitement/{id}', 'FraigestionController@edits');

Route::get('profil', 'UserController@profile');
Route::get('calendar', 'UserController@calendar');
Route::post('profil', 'UserController@avatar');

//webservice

Route::get('web', 'WebController@webinfoconnect');
Route::get('wsdl', 'WebController@webwsdl');







