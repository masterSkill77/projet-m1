<?php

use App\Http\Controllers\API\EventController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('/evenement')->group(function () {
    Route::get('/', [EventController::class, 'getAll']);
    Route::post('/', [EventController::class, 'createEvent']);
    Route::get('/type/{idType}', [EventController::class, 'getEventByType']);
});
