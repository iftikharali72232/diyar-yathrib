<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// public routes
Route::post("/register", [AuthController::class,"register"])->name("register");
Route::post("/register", [AuthController::class,"register"])->name("register");

// protected routes
Route::group(["middleware"=> "auth:sanctum"], function () {
    // User
    Route::get("/logout", [AuthController::class,"logout"])->name("logout");
});