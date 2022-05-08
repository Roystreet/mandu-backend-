<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DivisionController;

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

Route::post('/divisions', [DivisionController::class, 'create']);
Route::get('/divisions/{id}', [DivisionController::class, 'show']);
Route::put('/divisions/{id}', [DivisionController::class, 'update']);
Route::delete('/divisions/{id}', [DivisionController::class, 'destroy']);
Route::get('/divisions', [DivisionController::class, 'totalDivisions']);
Route::get('/division-subdivisions/{id}', [DivisionController::class, 'subDivisions']);
