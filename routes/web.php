<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('register');
});

Route::get("/register", [UserController::class, "create"])->name("register");
Route::post("/register",[UserController::class, "store"]);