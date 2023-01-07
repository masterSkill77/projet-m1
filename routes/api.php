<?php

use App\Http\Controllers\API\EventController;
use App\Http\Controllers\API\InformationTypeController;
use App\Http\Controllers\API\OffreController;
use App\Http\Controllers\API\PartenaireController;
use App\Http\Controllers\API\InformationController;
use App\Http\Controllers\Auth\LoginController;
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
    Route::get('date/{date}', [EventController::class, 'getEventByDate']);
    Route::get('between-date/{date_start}/{date_end}', [EventController::class, 'getEventBetweenDate']);
});

Route::prefix('/partenaire')->group(function () {
    Route::get('/', [PartenaireController::class, 'getAll']);
    Route::post('/', [PartenaireController::class, 'createPartenaire']);
    Route::get('/{id}', [PartenaireController::class, 'getOne']);
});


Route::prefix('/offre')->group(function () {
    Route::get('/', [OffreController::class, 'getAll']);
    Route::post('/', [OffreController::class, 'createOffre']);
    Route::get('/{id}', [OffreController::class, 'getOne']);
});


Route::prefix('/information')->group(function () {
    Route::get('/', [InformationController::class, 'getAll']);
    Route::post('/', [InformationController::class, 'createInfo']);
    Route::get('/{id}', [InformationController::class, 'getOne']);
    Route::get('/type/{id}', [InformationController::class, 'getInfoByType']);
});

Route::prefix('/information-type')->group(function () {
    Route::get('/', [InformationTypeController::class, 'getAllType'])->middleware('auth:sanctum');
    Route::post('/', [InformationTypeController::class, 'createType'])->middleware('auth:sanctum');
});

Route::post('/login', LoginController::class);
