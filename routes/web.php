<?php

use Illuminate\Support\Facades\Route;
use DB;

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

Route::post('/admin', function () {
    return view('index');
});

Route::get('posts', function () {
    $posts = DB::table('posts')->where('view', '>', 100 )->get();

    return view('posts.index', ['posts' => $posts]);
});

