<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;

//Route::get('/', function () {
   // return view('welcome');
//});
//Route::get('/home', function () {
   // return <h1>Hello</h1>;
//});
//Route::get('/about', function () {
   // return view('pages.about');
   ///});

Route::get('/',[PagesController::class,'index']);
Route::get('/about',[PagesController::class,'about']);
Route::get('/services',[PagesController::class,'services']);

Route::get('/user/{id}', function ($id) {
    return 'This is user id :'.$id;
});
Route::resource('posts',PostController::class);
