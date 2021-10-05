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
Route::get('/home', function () {
    return view('site/pokedex');
})->middleware('auth', 'verified');

Route::get('/', function () {
    return view('site/pokedex');
})->middleware('auth', 'verified');

Route::get('/pokedex', function () {
    return view('site/pokedex');
})->middleware('auth', 'verified');

//Route::get('/lucky', function () {
//    return view('site/lucky');
//})->middleware('auth', 'verified');
Route::get('/lucky', 'App\Http\Controllers\LuckyController@Post' ,'')->middleware('auth', 'verified');
Route::post('/lucky', 'App\Http\Controllers\LuckyController@Post' ,'')->middleware('auth', 'verified');


Route::get('/ladder', function () {
    return view('site/ladder');
});
Route::get('/authentification', function () {
    return view('auth/twoFactorAuthentification');
})->middleware('auth', 'verified');
Route::get('/reset', function () {
    return view('auth/resetPassword');
})->middleware('auth', 'verified');

