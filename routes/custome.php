<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;


Route::group(["prefix" => "custome"], function () {
    // login
    Route::get("login", [AuthController::class, "loginPage"])->name("login");
    Route::post("login", [AuthController::class, "login"])->name("login.process");
    // register
    Route::get("register", [AuthController::class, "registerPage"])->name("register");
    Route::post("register", [AuthController::class, "register"])->name("register.process");
    // logout
    Route::get("logout", [AuthController::class, "logout"])->name("logout");
});

// dashboard
Route::get("users/dahboard", function () {
    return view("user.dashboard");
})->name("user.dashboard")->middleware("user");

Route::get("admins/dahboard", function () {
    return view("admin.dashboard");
})->name("admin.dashboard")->middleware("admin");





