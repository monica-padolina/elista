<?php

use App\Http\Controllers\TaskController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function(){
    Route::resource(name: 'pages', controller: \App\Http\Controllers\PageController::class);
    Route::resource(name: 'list_groups', controller: \App\Http\Controllers\ListGroupController::class);
    Route::resource(name: 'list_groups.todolists', controller: \App\Http\Controllers\TodolistController::class);
    Route::resource(name: 'todolists.tasks', controller: \App\Http\Controllers\TaskController::class);
});