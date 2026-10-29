<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/home', [SiteController::class, 'home']);

Route::get('/login', [LoginController::class, 'index']);
