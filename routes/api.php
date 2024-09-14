<?php

use App\Http\Controllers\Api\FacilityController;
use App\Http\Controllers\Api\RoomController;
use App\Http\Controllers\Api\SportController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/rooms', [RoomController::class, 'index']);
Route::post('/rooms', [RoomController::class, 'store']);
Route::put('/rooms/{id}', [RoomController::class, 'edit']);
Route::post('/update/{id}', [RoomController::class, 'update']);
Route::delete('/rooms/{id}', [RoomController::class, 'delete']);

Route::get('/facilities', [FacilityController::class, 'index']);
Route::post('/facilities', [FacilityController::class, 'store']);
Route::put('/facilities/{id}', [FacilityController::class, 'edit']);
Route::post('/update/{id}', [FacilityController::class, 'update']);
Route::delete('/facilities/{id}', [FacilityController::class, 'delete']);

Route::get('/sports', [SportController::class, 'index']);
Route::post('/sports', [SportController::class, 'store']);
Route::put('/sports/{id}', [SportController::class, 'edit']);
Route::post('/update/{id}', [SportController::class, 'update']);
Route::delete('/sports/{id}', [SportController::class, 'delete']);
