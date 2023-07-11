<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Models\User;
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


Route::get("/categories",[PostController::class,'index'])->middleware('auth');

// Route::get("/categories/{user:name}", [PostController::class, 'showbyname']);

Route::get("/categories/{user:email}",[PostController::class,'show'])->middleware('auth');
Route::get('/register',[RegisterController::class,'create'])->middleware('guest');

Route::post('/register',[RegisterController::class,'store'])->middleware('guest');

Route::get('/login',[SessionsController::class,'create'])->middleware('guest');
Route::post('/login',[SessionsController::class,'store'])->middleware('guest');
Route::post('/logout', [SessionsController::class, 'destroy']);

// Route::get("/categories/{user:email}", function (User $user) {
//     $post = $user->posts()->first();

//     return view('wels', [
//         'post' => $post,
//     ]);
// })->middleware('auth');


Route::get('/posts/{post:id}',[PostController::class,'showPost']);
Route::post('/comment/{post:id}',[PostController::class,'createcomment']);
Route::delete('/comment/{comment:id}',[CommentController::class,'delete']);