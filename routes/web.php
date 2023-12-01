<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;

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

Route::get('/', HomeController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::controller(CourseController::class)->group(function () {
        Route::get('courses', 'index')->name('courses.index');
        Route::get('courses/create', 'create')->name('courses.create');
        Route::post('courses', 'store')->name('courses.store');
        Route::get('courses/{course}', 'show')->name('courses.show');
        Route::get('courses/{course}/edit', 'edit')->name('courses.edit');
        Route::put('courses/{course}', 'update')->name('courses.update');
        Route::delete('courses/{course}', 'destroy')->name('courses.destroy');
    });
});
