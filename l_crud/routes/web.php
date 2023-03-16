<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/', [StudentController::class, 'students']);
Route::get('view-student/{id}', [StudentController::class, 'viewStudent']);

Route::get('create-student', [StudentController::class, 'createStudent']);
Route::post('save-student', [StudentController::class, 'saveStudent']);

Route::get('edit-student/{id}', [StudentController::class, 'editStudent']);
Route::post('update-student/{id}', [StudentController::class, 'updateStudent']);

Route::post('delete-student/{id}', [StudentController::class, 'deleteStudent']);


