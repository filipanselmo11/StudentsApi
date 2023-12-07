<?php

use App\Http\Controllers\StudentController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('students', [StudentController::class, 'getAllStudents']);
Route::get('students/{id}', [StudentController::class, 'getStudent']);
Route::post('students', [StudentController::class, 'createStudent']);
Route::put('students/{id}', [StudentController::class, 'updateStudent']);
Route::delete('students/{id}', [StudentController::class, 'deleteStudent']);
