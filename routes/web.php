<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/freeza', [App\Http\Controllers\FreezaController::class, 'index']);
