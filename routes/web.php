<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\BlogController;

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
        return redirect('/blog');
    });

    //blog index
    Route::get('/blog', [\App\Http\Controllers\BlogController::class, 'index']);
    Route::get('/blog/{blogId}', [\App\Http\Controllers\BlogController::class, 'getById']);


    //rest URL(s)
        //get comment by ID
        Route::get('/comments/{blogId}/{replyId}', [CommentsController::class, 'index'])->name('comments.get');
        Route::post('/comments', [CommentsController::class, 'create'])->name('comments.post');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
