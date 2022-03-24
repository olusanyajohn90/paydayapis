<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NominalRollController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



//Justice

//Dashboards
Route::get('/dashboard', [NominalRollController::class,'dashboard']);
Route::get('/retirementdashboard', [NominalRollController::class,'retirementdashboard']);



///categories
Route::get('/get-all-staff', [NominalRollController::class, 'getallstaff'])->name('get-allstaff') ;
Route::get('/show', [NominalRollController::class, 'getallstaff'])->name('nominal.show') ;
//Route::post('store/asset-categories', [NominalRollController::class, 'storecategory'])->name('store.assetcategory' ) ;

