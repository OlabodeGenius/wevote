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

Route::get('/', 'Front\IndexController@index');

Route::get('/account/activation/{token}', 'Auth\RegisterController@signupActivate');

Route::post('/register', 'Auth\RegisterController@register');

Auth::routes();

Route::get('/home', 'Back\BackController@getIndex')->name('home');

Route::get('/states', 'Api\StateController@states');

Route::get('/lgas/{state}', 'Api\StateController@lgas');

Route::get('/candidate', 'Back\BackController@candidate')->name("candidate");

Route::post('/candidate', 'Back\BackController@postCandidate')->name("candidate");

Route::get('/governoship/candidate', 'Back\BackController@getGovernorship');

Route::get('/presidential/candidate', 'Back\BackController@getPresidential');

Route::get('/parties', 'Back\BackController@getparties');

Route::get('/governors', 'Back\CandidateController@getGovernorship');

Route::get('/presidentials', 'Back\CandidateController@getPresidential');

Route::post('/vote', 'Back\VoteController@vote')->name('vote');

