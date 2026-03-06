<?php

use App\Http\Controllers\GalloryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Home' , [HomeController::class , 'index'])->name('Home.index');


Route::resource('/gallory' , GalloryController::class);