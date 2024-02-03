<?php
//web

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tp2Controller ;
use App\Http\Controllers\FileController ;
use App\Http\Controllers\UserController;
// Route::resource('/Votre espace',OurContorller::class);

Route::resource('/product',Tp2Controller::class);
