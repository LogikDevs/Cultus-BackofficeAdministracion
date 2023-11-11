<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Autenticacion;

    Route::get('/', function () {
        return view('inicio');
    });

    Route::get('/home', function(){
        return view('home');
    });//->middleware(Autenticacion::class);

    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/list', [UserController::class, 'ListAllUsers'])->name('users.userslist');
    Route::get('/user', [UserController::class, 'ListUser'])->name('users.user');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::get('/users/email', [UserController::class, 'ListUserMail'])->name('users.email');
    Route::get('/users/edit/{user}', [UserController::class, 'edit'])->name('users.edit');
    Route::get('/users/update/{user}', [UserController::class, 'update'])->name('users.update');
 
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