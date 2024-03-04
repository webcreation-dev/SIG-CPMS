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
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
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



// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/pdf', function () {

//     $data = [
//         [
//             'quantity' => 1,
//             'description' => '1 Year Subscription',
//             'price' => '129.00'
//         ]
//     ];

//     $pdf = Pdf::loadView('fiche_de_calcul', ['data' => $data]);

//     return $pdf->stream();
// });
// Route::get('/pdf1', function () {

//     $pdf = Pdf::loadView('releve_de_notes');
//     return $pdf->stream();
// });

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function () {

    // ADMINISTRATION

    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    // ROUTE RESOURCE

    Route::resource('classrooms', ClassroomController::class);

    Route::resource('teaching_units', TeachingUnitController::class);

    Route::resource('element_teaching_units', ElementTeachingUnitController::class);

    Route::resource('students', StudentController::class);

    Route::resource('notes', NoteController::class);
    Route::get('/releve_de_notes', [NoteController::class, 'releveNotes'])->name('releve.notes');
    Route::get('/fiche_de_calcul', [NoteController::class, 'ficheCalcul'])->name('fiche.calcul');



    Route::resource('users', UserController::class);
});




