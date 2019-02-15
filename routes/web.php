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
})->name('home');

// Dit is om de help pagina te laten zien
Route::get('/help', function(){
    return view('help');
})->name('help');

// Voeg hier je eigen routes toe

//Laravel Links
Route::get('/laravel-links', function() {
    return view('laravelLinks');
})->name('laravelLinks');

Route::get('/laravel-links', 'LinksController@index')->name('laravelLinks');

//Links opslaan
Route::get('/link-toevoegen', function() {
    return view('linkToevoegen');
})->name('linkToevoegen');

Route::post('/link-toevoegen', 'LinksController@handleLinksForm')->name('linkToevoegen');

//Link confirmation
Route::get('/linkConfirmation', function() {
    return view('linkConfirmation');
})->name('linkConfirmation');

