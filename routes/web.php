<?php

use App\Models\Posts;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('posts/', function () {
    return view('posts.index', [
        'posts' => Posts::all(),
    ]);
});


Route::get('posts/{post}', function ($slug) {
    return view('posts', [
        'post' => Posts::findAllOrFail($slug)
    ]);
});



//Route::get('/posts', [UserController::class, 'index']);
