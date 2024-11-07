<?php

use App\Http\Controllers\CarDetailController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::post('/car-details', [CarDetailController::class, 'store']);
Route::get('/car-colors', [CarDetailController::class, 'colors']);
Route::get('/car-models', [CarDetailController::class, 'models']);
Route::get('/car-body', [CarDetailController::class, 'bodytypes']);
Route::get('/car-fules', [CarDetailController::class, 'fules']);
Route::post('/save-images', [CarDetailController::class, 'upload_images']);