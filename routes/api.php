<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerLoans;

Route::get('/test', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/books', [ControllerLoans::class, 'index']);
Route::post('/loans', [ControllerLoans::class, 'store']);
Route::get('/returns/{loans_id}', [ControllerLoans::class, 'returnBook']);

