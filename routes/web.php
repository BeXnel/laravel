<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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


Route::get('/{tasks}/{imie}/{nazwisko}', function ($tasks, $imie, $nazwisko) {
    return view('index', ['user' => 'John'], ['tasks' => $tasks, 'imie' => $imie, 'nazwisko' => $nazwisko]);
});


Route::get('pages/create', 'App\Http\Controllers\PageController@create');

Route::post('pages', 'App\Http\Controllers\PageController@store');

Route::get('/pages/{slug}', 'App\Http\Controllers\PageController@show');

Route::get('pages', 'App\Http\Controllers\PageController@index');




