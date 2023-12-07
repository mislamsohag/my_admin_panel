<?php

use App\Http\Controllers\DeshboardController;
use Illuminate\Support\Facades\Route;

Route::group(["prefix" => "admin"], function () {
    Route::get("/", [DeshboardController::class, "home"]);
    Route::get("/home", [DeshboardController::class, "home"])->name('home');
    Route::get("/tasks", [DeshboardController::class, "tasks_list"])->name('tasks.list');
});