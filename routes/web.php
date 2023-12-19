<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CounselorController;
use App\Http\Controllers\AppointmentController;
use App\Models\Appointment;
use App\Models\Student;

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

// Route::get('/welcome', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/', [HomeController::class, 'welcome']);

Route::get('/students', [StudentController::class, 'index'])->name('students');
Route::get('/students/create', [StudentController::class, 'create'])->name('students');
Route::post('/students/create', [StudentController::class, 'store'])->name('students');
Route::get('/students/{student}', [StudentController::class, 'edit']);
Route::post('/students/{student}', [StudentController::class, 'update']);
Route::delete('/students/delete/{student}', [StudentController::class, 'delete']);


Route::get('/counselors', [CounselorController::class, 'index'])->name('counselors');
Route::get('/counselors/create', [CounselorController::class, 'create'])->name('counselors');
Route::post('/counselors/create', [CounselorController::class, 'store'])->name('counselor.store');
Route::get('/counselors/{counselor}', [CounselorController::class, 'edit']);
Route::post('/counselors/{student}', [StudentController::class, 'update']);
Route::delete('/counselors/delete/{counselor}', [CounselorController::class, 'delete']);
Route::get('/counselors/{counselor}',[CounselorController::class, 'show'])->name('counselor');


Route::get('/appointments', [AppointmentController::class, 'index'])->name('appointment.index');
Route::get('/appointments/create', [AppointmentController::class, 'create'])->name('appointments');
Route::post('/appointments/create', [AppointmentController::class, 'store'])->name('appointments');
Route::get('/appointments/{appointment}', [AppointmentController::class, 'show'])->name('appointments');
Route::get('/appointments/{id}', 'AppointmentController@show')->name('appointment.show');
