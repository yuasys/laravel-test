<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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
Route::get('/phpinfo', function () {
    phpinfo();
});

Route::get('/about', function () {
    // return '<h1 style="color:orange;">このブログについて</h1>';
    return view('about');
});

Route::get('/posts', function () {
    return '<h1>記事リスト</h1>';
});

Route::get('/posts/{id}', [PostsController::class, 'show']);
