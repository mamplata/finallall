<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

use App\Http\Controllers\UserController;

// Route to get all users
Route::get('/users', [UserController::class, 'index']);

// Route to get a specific user by ID
Route::get('/users/{id}', [UserController::class, 'show']);

// Route to update a user by ID
Route::put('/users/{id}', [UserController::class, 'update']);

// Route to delete a user by ID
Route::delete('/users/{id}', [UserController::class, 'destroy']);

// Route to register a new user
Route::post('/register', [UserController::class, 'register']);

// Route to login a user
Route::post('/login', [UserController::class, 'login']);

// Route to logout a user
Route::post('/logout', [UserController::class, 'logout']);

// Route to get all users
Route::get('/all-users', [UserController::class, 'getAllUsers']);

// Route to get users by role
Route::get('/users/{role}', [UserController::class, 'getUsersByRole']);
