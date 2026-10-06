<?php

use App\Http\Controllers\Auth\Logout;
use App\Http\Controllers\Auth\Register;
use App\Http\Controllers\ChirpController;
use Illuminate\Support\Facades\Route;

Route::get("/", [ChirpController::class, "index"]);

Route::middleware("auth")->group(function () {
    Route::post("/chirps", [ChirpController::class, "store"]);
    Route::get("/chirps/{chirp}/edit", [ChirpController::class, "edit"]);
    Route::put("/chirps/{chirp}", [ChirpController::class, "update"]);
    Route::delete("/chirps/{chirp}", [ChirpController::class, "destroy"]);
});

/* This is identical with four routes above with '/chirps' prefix */
// Route::resource("/chirps", ChirpController::class)->only([
//     "store",
//     "edit",
//     "update",
//     "destroy",
// ]);

// REGISTER ROUTES
Route::view("/register", "auth.register")
    ->middleware("guest")
    ->name("register"); // give name to this route
Route::post("/register", Register::class)->middleware("guest");

// LOGOUT
Route::post("/logout", Logout::class)->middleware("auth");
