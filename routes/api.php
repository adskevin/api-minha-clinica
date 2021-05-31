<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ProcedureController;
use App\Http\Controllers\ProfessionalController;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('patients', [PatientController::class, 'index']);
Route::get('patients/{id}', [PatientController::class, 'show']);
Route::post('patients', [PatientController::class, 'store']);
Route::put('patients/{id}', [PatientController::class, 'update']);
Route::delete('patients/{id}', [PatientController::class, 'delete']);

Route::get('procedures', [ProcedureController::class, 'index']);
Route::get('procedures/{id}', [ProcedureController::class, 'show']);
Route::post('procedures', [ProcedureController::class, 'store']);
Route::put('procedures/{id}', [ProcedureController::class, 'update']);
Route::delete('procedures/{id}', [ProcedureController::class, 'delete']);

Route::get('professionals', [ProfessionalController::class, 'index']);
Route::get('professionals/{id}', [ProfessionalController::class, 'show']);
Route::post('professionals', [ProfessionalController::class, 'store']);
Route::put('professionals/{id}', [ProfessionalController::class, 'update']);
Route::delete('professionals/{id}', [ProfessionalController::class, 'delete']);
