<?php

use App\Http\Controllers\ChirpController;
use Illuminate\Support\Facades\Route;

Route::get("/", [ChirpController::class, "index"]);
Route::post("/chirps", [ChirpController::class, "store"]);
Route::get("/chirps/{chirp}/edit", [ChirpController::class, "edit"]);
Route::put("/chirps/{chirp}", [ChirpController::class, "update"]);
Route::delete("/chirps/{chirp}", [ChirpController::class, "destroy"]);

/* This is identical with four routes above with '/chirps' prefix */
// Route::resource("/chirps", ChirpController::class)->only([
//     "store",
//     "edit",
//     "update",
//     "destroy",
// ]);
