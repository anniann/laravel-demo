<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user(); // Return authenticated user details
// });

Route::get('/', function () {
    return view('welcome');
});

Route::get('/events', [EventController::class, 'index']);
Route::post('/events/reload', [EventController::class, 'reload']);
Route::get('/events/{id}', [EventController::class, 'show']);