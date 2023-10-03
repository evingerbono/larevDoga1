<?php

use App\Http\Controllers\AirlineController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/airline', [AirlineController::class, 'index']);
Route::get('/api/airline/{airline_id}', [AirlineController::class, 'show']);
Route::put('/api/airline/edit/{airline_id}', [AirlineController::class, 'update']);
Route::post('/api/airline/new', [AirlineController::class, 'store']);
Route::delete('/api/airline/{airline_id}', [AirlineController::class, 'destroy']);

Route::get('/airline/delete/{airline_id}', [AirlineController::class, 'destroyView']);
Route::get('/airline/list', [AirlineController::class, 'listView']);
Route::get('/api/airline/edit/{airline_id}', [AirlineController::class, 'update']);
