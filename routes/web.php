<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/set', [PostController::class, 'set']);
Route::get('/get', [PostController::class, 'get']);
Route::get('/counter', [PostController::class, 'counter']);

Route::get('/session', [PostController::class, 'index']);
Route::get('/session/reset', [PostController::class, 'resetSession']);


Route::get('/post/show1', [PostController::class, 'show1']);
Route::get('/post/show2', [PostController::class, 'show2']);
Route::get('/post/form', [PostController::class, 'formCheckView']);
Route::post('/post/form', [PostController::class, 'formCheck'])->name('form');


