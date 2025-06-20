<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MeetingController;
use App\Http\Controllers\login;
use App\Http\Controllers\RegisterController;

Route::get('/meetings', [MeetingController::class, 'index']);
Route::get('/login', [login::class, 'login']);
Route::get('/register', [RegisterController::class, 'showRegisterForm']);