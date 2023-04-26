<?php

use App\Models\Proyecto;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

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



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dash', [CrudController::class, 'index'])->name('CRUD.index');
    
    Route::get('/CRUD', [CrudController::class, 'create'])->name('CRUD.create');

    Route::post('/CRUD', [CrudController::class, 'store'])->name('CRUD.store');

    Route::get('/CRUD/{id}/edit',[CrudController::class, 'edit'])->name('CRUD.edit');

    Route::get('/CRUD/{id}',[CrudController::class, 'update'])->name('CRUD.update');

    Route::delete('/CRUD/{id}', [CrudController::class, 'destroy'])->name('CRUD.destroy');
});
