<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Middleware\Autenticacion;
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
        return view('inicio');
    });

    Route::get('/home', function(){
        return view('home');
    });//->middleware(Autenticacion::class);

    Route::get('/users', function(){
        return view('users');
    });

    Route::get('/posts', function(){
        return view('posts');
    });

    Route::get('/events', function(){
        return view('events');
    });

    Route::get('/groups', function(){
        return view('groups');
    });

    Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'Register']);
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');



    
    Route::get('/posts/list', [PostController::class, 'ListAllPosts'])->name('postslist');
    Route::post('/posts/list', [PostController::class, 'ListAllPosts']);
    Route::get('/posts/list', [PostController::class, 'ListAllPosts']);
    Route::get('/posts/listone', [PostController::class, 'ListOnePost']);
    Route::get('/posts/listuser', [PostController::class, 'login']);