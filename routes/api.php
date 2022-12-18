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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/zimnol/305426/people',\App\Http\Controllers\peoplecontroller::class);
Route::get('/zimnol/305426/people/{id}',[\App\Http\Controllers\peoplecontroller::class,'show']);
Route::post('/zimnol/305426/people/',[\App\Http\Controllers\peoplecontroller::class,'store']);
Route::delete('/zimnol/305426/people/{id}',[\App\Http\Controllers\peoplecontroller::class,'delete']);
Route::put('/zimnol/305426/people/{id}/{name}',[\App\Http\Controllers\peoplecontroller::class,'update']);