<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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
    return view('index');
})->name('index');

Route::get('/Inscripciones/create',[StudentController::class,'create'])->name('students.create');

Route::get('/Inscripciones',[StudentController::class,'store'])->name('students.store');


Route::get('/Lista', [StudentController::class, 'index'])->name('Lista');

Route::get('download-pdf', [StudentController::class, 'downloadPdf'])->name('download-pdf');

