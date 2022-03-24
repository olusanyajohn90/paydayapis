<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaydayApiController;

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


Route::get('staff', [PaydayApiController::class,'getAllStaff']);
Route::get('staff/{id}', [PaydayApiController::class,'getStaff']);
Route::get('wacsstaff/{id}', [PaydayApiController::class,'getWacsStaff']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
