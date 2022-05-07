<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\V1;

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

Route::middleware('auth:sanctum')->group(function () {
    Route::prefix('v1')->group(function () {
        Route::apiResource('album', V1\AlbumController::class);
        Route::get('image', [V1\ImageManipulationController::class, 'index']);
        Route::get('image/by-album/{album}', [V1\ImageManipulationController::class, 'byAlbum']);
        Route::get('image/{image}', [V1\ImageManipulationController::class, 'show']);
        Route::post('image/resize', [V1\ImageManipulationController::class, 'resize']);
        Route::delete('image/{image}', [V1\ImageManipulationController::class, 'destroy']);
    });


});


