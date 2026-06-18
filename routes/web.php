<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/dashboard', function () {
    return view('backend.dashboard');
});


Route::get('students', [StudentController::class, 'index'])->name('student.index');
Route::get('students/create', [StudentController::class, 'create'])->name('student.create');
Route::post('students', [StudentController::class, 'store'])->name('student.store');
Route::get('students/{id}/edit', [StudentController::class, 'show'])->name('student.edit');
Route::post('students/{id}', [StudentController::class, 'destroy'])->name('student.destroy');
Route::put('/students/{id}', [StudentController::class, 'update'])->name('student.update');
Route::get('/students/{id}/show', [StudentController::class, 'newshow'])->name('student.show');


