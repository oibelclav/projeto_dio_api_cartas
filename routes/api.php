<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\getDeckController;
use App\Http\Controllers\API\reshufflerDeckController;
use App\Http\Controllers\API\drawOfCardsController;

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
//[getDeckController::class, "getDeck"]

Route::get("getDeck",[getDeckController::class, "getDeck"]);
Route::post("reshuffle",[reshufflerDeckController::class,"reshufflerDeck"]);
Route::post("drawCards", [drawOfCardsController::class,"drawOfCards"]);