<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LegalServiceController; // Import the controller

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/legalservices', [LegalServiceController::class, 'viewallservices']);
Route::post('/addservices', [LegalServiceController::class, 'addlegalservices']);
Route::put('/updateserviceinfo/{id}', [LegalServiceController::class, 'updateservice']);
Route::delete('/removeservice/{id}', [LegalServiceController::class, 'removeservice']);
