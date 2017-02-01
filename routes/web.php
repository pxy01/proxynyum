<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'HomeController@index')->name('index');

Route::get('/Je-ne-peut-pas-me-deplacer-au-bureau-de-vote', 'HomeController@nonVotant')->name('non.votant');
Route::post('/Je-ne-peut-pas-me-deplacer-au-bureau-de-vote', 'HomeController@nonVotantValidate')->name('non.votant.send');


Route::get('/Je-vote-mais-j-hesite', 'HomeController@hesitant')->name('hesitant');
Route::post('/Je-vote-mais-j-hesite', 'HomeController@hesitantValidate')->name('hesitant.send');


Route::get('/Je-n-est-pas-le-temps-de-m-y-interesser', 'HomeController@nonInteresse')->name('non.interesse');
Route::get('/Je-vote-blanc', 'HomeController@voteBlanc')->name('vote.blanc');
Route::get('/Je-m-abstien-par-conviction', 'HomeController@abstenant')->name('abstenant');
Route::get('/Je-suis-fidele-aux-urnes', 'HomeController@fidele')->name('fidele');
Route::get('/notre-mission', 'HomeController@mission')->name('mission');
Route::get('search/autocomplete', 'SearchController@autocomplete');