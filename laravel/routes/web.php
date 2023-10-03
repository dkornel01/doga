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
Route::get('api/participate',[ParticipateController::class,'index']);
Route::get('/api/participate', ParticipateController::class,'show');
Route::post('/api/participate', [ParticipateController::class,'store']);
Route::put('/api/participate', ParticipateController::class,'update');
Route::delete('/api/participats', ParticipateController::class,'destroy');
Route::get('/participate/new', ParticipateController::class,'newView');
Route::get('/participate/edit/{id}', ParticipateController::class,'editView');
Route::get('/participate/list', ParticipateController::class,'listView');
