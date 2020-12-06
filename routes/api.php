<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/ok', function (Request $request) {
    return env('APP_NAME') . " Ok!";
});

# API V1 routes
Route::prefix('v1')->group(function () {

    Route::get('/ok', function (Request $request) {
        return env('APP_NAME') . " v1 Ok!";
    });
});


