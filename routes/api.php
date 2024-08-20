<?php

use App\Http\Controllers\Api\V1\BlogController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::group(['prefix' => 'v1'], function(){
    Route::get('/blogs', [BlogController::class, 'index']);
});
