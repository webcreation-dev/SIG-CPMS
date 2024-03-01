<?php

use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\ElementTeachingUnitController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeachingUnitController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ValidatorFormController;
use Illuminate\Support\Facades\Request;
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



Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function () {

    // ADMINISTRATION

    Route::get('/admin', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    // ROUTE RESOURCE

    Route::resource('classrooms', ClassroomController::class);

    Route::resource('teaching_units', TeachingUnitController::class);

    Route::resource('element_teaching_units', ElementTeachingUnitController::class);

    Route::resource('students', StudentController::class);

    Route::resource('notes', NoteController::class);



    Route::resource('users', UserController::class);
});




