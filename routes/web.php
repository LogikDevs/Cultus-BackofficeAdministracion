<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GroupController;
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
    
    Route::get('/groups', [GroupController::class, 'index'])->name('groups.index');
    Route::get('/groups/list', [GroupController::class, 'ListAllGroups'])->name('groups.groupslist');    
    Route::get('/groups/listone', [GroupController::class, 'ListGroup'])->name('groups.group');
    Route::get('/groups/listuser', [GroupController::class, 'ListUserGroup'])->name('groups.usergroup');
    Route::get('/groups/listpost', [GroupController::class, 'ListPostGroup'])->name('groups.postgroup');
    Route::delete('/groups/{group}', [GroupController::class, 'destroy'])->name('groups.destroy');
    Route::get('/groups/edit/{group}', [GroupController::class, 'edit'])->name('groups.edit');
    Route::get('/groups/update/{group}', [GroupController::class, 'update'])->name('groups.update');
    Route::get('/integrates/{group}', [GroupController::class, 'GroupIntegrates'])->name('groups.integrates');




    Route::get('/posts', function(){return view('posts.index');})->name('posts.index');
    Route::get('/posts/list', [PostController::class, 'ListAllPosts'])->name('posts.list');
    Route::get('/posts/post', [PostController::class, 'ListOnePost'])->name('posts.post');
    Route::get('/posts/search', [PostController::class, 'ListPostText'])->name('posts.search');
    Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
    Route::get('/posts/edit/{post}', [PostController::class, 'edit'])->name('posts.edit');
    Route::get('/posts/update/{post}', [PostController::class, 'update'])->name('posts.update');

    Route::get('/posts/listuser', [PostController::class, 'ListUserPosts'])->name('posts.userposts');
    Route::get('/posts/listgroup', [PostController::class, 'ListGroupPosts'])->name('posts.groupposts');
    Route::get('/posts/listevent', [PostController::class, 'ListEventPosts'])->name('posts.eventposts');
    Route::get('/posts/listcomment', [PostController::class, 'ListCommentPosts'])->name('posts.commentposts');
    
    
  

    Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'Register']);
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');



    

    Route::get('/posts/listuser', [PostController::class, 'login']);