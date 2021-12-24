<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeControl;
use App\Http\Controllers\adminControl;
use App\Http\Controllers\ProjectLeads;




//Route::get('/', function () {
//    return view('welcome');
//});


Route::get("/",[homeControl::class,"index"]);
Route::get("/users",[adminControl::class,"user"]);
Route::get("/project",[adminControl::class,"project"]);

Route::get("/redirect",[homeControl::class,"redirectFunct"]);

Route::get('/create',[homeControl::class,"create"]) ;

Route::post('/store',[homeControl::class,"store"]) ;

Route::get('/edit/{id}',[homeControl::class,"edit"]) ;

Route::get('/show/{id}',[homeControl::class,"show"]) ;

Route::post('/update/{id}',[homeControl::class,"update"]) ;

//Route::get("/redirect_manager",[homeControl::class,"redirectFunct"]);




Route::get("/deleteuser/{id}",[homeControl::class,"deleteuser"]);



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
