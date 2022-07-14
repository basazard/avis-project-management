<?php

use App\Http\Controllers\AVQualitySystemController;
use App\Http\Controllers\BOMController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DrawingController;
use App\Http\Controllers\LessonLearnedController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RIOController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function(){
    return view('auth.login');
});

Route::get('dashboard', [DashboardController::class, 'index']);

Route::get('task', [TaskController::class, 'index']); 

Route::get('project', [ProjectController::class, 'index']);

Route::get('library', [LibraryController::class, 'index']);

Route::get('rio', [RIOController::class, 'index']);

Route::get('bom', [BOMController::class, 'index']);

Route::get('drawing', [DrawingController::class, 'index']);

Route::get('lesson_learned', [LessonLearnedController::class, 'index']);

Route::get('av_quality_system', [AVQualitySystemController::class, 'index']);

Route::get('manufacturing_guideline', [ManufacturingGuidelineController::class,'index']);




