<?php

use App\Http\Controllers\ChildController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\GrandChildController;
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

Route::get('/kids', [
    ChildController::class, 'getAllKids'
]);

Route::get('/grand_child', [
    GrandChildController::class, 'getGrandChild'
]);

Route::get('/grand_daughter', [
    GrandChildController::class, 'getGrandDaughter'
]);

Route::get('/aunt', [
    ChildController::class, 'getAunt'
]);

Route::get('/cousin', [
    GrandChildController::class, 'getMaleCousin'
]);


