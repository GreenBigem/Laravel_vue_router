<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Person\StoreController;
use App\Http\Controllers\Person\IndexController;
use App\Http\Controllers\Person\UpdateController;
use App\Http\Controllers\Person\DeleteController;
use App\Http\Controllers\Person\ShowController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'Person', 'prefix' => 'people'], function() {
    Route::post('/', [StoreController::class, 'index']);
    Route::get('/', [IndexController::class, 'index']);
    Route::get('/{person}', [ShowController::class, 'show']);
    Route::patch('/{person}', [UpdateController::class, 'update']);
    Route::delete('/{person}', [DeleteController::class, 'delete']);
});
