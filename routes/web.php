<?php

use App\Http\Controllers\ConsultasController;
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

//Routes by LRG
Route::get('/consultas/area-teacher',[ConsultasController::class, 'consultasAreaTeacher']);
Route::get('/consultas/teacher-area',[ConsultasController::class, 'consultasTeacherArea']);
Route::get('/consultas/training-center-teacher',[ConsultasController::class, 'consultasTrainingCenterTeacher']);
Route::get('/consultas/teacher-training-center',[ConsultasController::class, 'consultasTeacherTrainingCenter']);
Route::get('/consultas/training-center-course',[ConsultasController::class, 'consultasTrainingCenterCourse']);
Route::get(  '/consultas/course-training-center', [ConsultasController::class, 'consultasCourseTrainingCenter']);
Route::get('/consultas/computer-apprentice', [ConsultasController::class, 'consultasComputerApprentice']);
Route::get('/consultas/apprentice-computer',[ConsultasController::class, 'consultasApprenticeComputer']);
Route::get( '/consultas/course-apprentice', [ConsultasController::class, 'consultasCourseApprentice']);
Route::get( '/consultas/apprentice-course', [ConsultasController::class, 'consultasApprenticeCourse']);
Route::get('/consultas/area-course',[ConsultasController::class, 'consultasAreaCourse']);
Route::get('/consultas/course-area', [ConsultasController::class, 'consultasCourseArea']);
Route::get('/consultas/course-teacher', [ConsultasController::class, 'consultasCourseTeacher']);
Route::get( '/consultas/teacher-course', [ConsultasController::class, 'consultasTeacherCourse']);





