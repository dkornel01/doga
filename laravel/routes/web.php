<?php

use App\Http\Controllers\ParticipateController;
use App\Models\Participate;
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

Route::get('/api/participates', ParticipateController::class,'show');
Route::post('/api/participates', [ParticipateController::class,'store']);
Route::put('/api/participates', ParticipateController::class,'update');
Route::delete('/api/participates', ParticipateController::class,'destroy');

Route::get('/participates/new', ParticipateController::class,'newView');
Route::get('/participates/edit/{id}', ParticipateController::class,'editView');
Route::get('/participates/list', ParticipateController::class,'listView');
