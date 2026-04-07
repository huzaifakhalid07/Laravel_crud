<?php
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Show All Students (Table)
Route::get('/students', [StudentController::class, 'index'])
    ->name('students.index');


// Show Add Student Form
Route::get('/students/create', [StudentController::class, 'create'])
    ->name('students.create');


// Store Student Data
Route::post('/students', [StudentController::class, 'store'])
    ->name('students.store');


// Show Edit Form
Route::get('/students/{id}/edit', [StudentController::class, 'edit'])
    ->name('students.edit');


// Update Student
Route::put('/students/{id}', [StudentController::class, 'update'])
    ->name('students.update');


// Delete Student
Route::delete('/students/{id}', [StudentController::class, 'destroy'])
    ->name('students.destroy');
