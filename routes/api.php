<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\Api\AuthController;


// Route::post('/register', [AuthController::class, 'register']);
// Route::post('/login',    [AuthController::class, 'login']);

// Route::middleware(['jwt.verify'])->group(function () {
//     Route::get('/items', [ItemController::class, 'index']);
//     Route::post('/items', [ItemController::class, 'store']);
//     Route::get('/items/{id}', [ItemController::class, 'show']);
//     Route::put('/items/{id}', [ItemController::class, 'update']);
//     Route::delete('/items/{id}', [ItemController::class, 'destroy']);
// });

Route::get('/hello', function () {
    return response()->json([
        'message' => 'Hello!'
    ]);
});
 
 