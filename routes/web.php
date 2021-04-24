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
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', [App\Http\Controllers\G1Controller::class, 'home']);
Route::get('/home', [App\Http\Controllers\G1Controller::class, 'home']);
Route::get('/post_1', [App\Http\Controllers\G1Controller::class, 'post1']);
Route::get('/post_2', [App\Http\Controllers\G1Controller::class, 'post2']);
Route::get('/post_3', [App\Http\Controllers\G1Controller::class, 'post3']);
Route::get('/about', [App\Http\Controllers\G1Controller::class, 'about']);
/*Route::get('/post1', function () {
    return view('post1');
});
Route::get('/post2', function () {
    return view('post2');
});
Route::get('/post3', function () {
    return view('post3');
});
Route::get('/about', function () {
    return view('about');
}); */