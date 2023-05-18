<?php

declare(strict_types=1);

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();
Auth::routes(['verify' => true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group([ 'prefix' => 'course', 'middleware' => ['auth:sanctum', 'verified']], function () {
    Route::post('submission', [CourseController::class, 'store'])->name('submission');
    Route::get('view-course-data', [CourseController::class, 'index'])->name('view-course-data');
    Route::put('update', [CourseController::class, 'update'])->name('update');
    Route::post('{uuid}', [CourseController::class, 'destroy'])->name('deleteCourse');


});
