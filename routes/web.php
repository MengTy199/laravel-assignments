<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::resource('/dashboard', StudentController::class);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// Route::get('/services', function () {
//     return view('services');
// })->middleware(['auth', 'verified'])->name('services');
// Route::resource('/students', StudentController::class)->middleware(['auth', 'verified'])->names('services');;
// Route::get('services' , [StudentController::class, 'index'])->name('services')->middleware('auth');
// Route::get('services/create' , [StudentController::class, 'create'])->name('services.create')->middleware('auth');
// Route::post('services/store' , [StudentController::class, 'store'])->name('services.store')->middleware('auth');
// Route::get('/services/{id}/edit' , [StudentController::class, 'edit'])->name('services.edit')->middleware('auth');
// Route::get('/services/{id}/update' , [StudentController::class, 'update'])->name('services.update')->middleware('auth');
// Route::delete('/services/{id}/delete' , [StudentController::class, 'destroy'])->name('services.delete')->middleware('auth');
Route::resource('/services', StudentController::class)->middleware('auth');