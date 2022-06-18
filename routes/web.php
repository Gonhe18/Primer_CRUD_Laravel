<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\crudController;

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

Route::get('crud',[crudController::class,'index'])->name('crud');
Route::get('crud/crear', [crudController::class,'create'])->name('crud.create');
Route::post('crud/crear/{productos?}', [crudController::class,'store'])->name('crud.store');
Route::get('/crud/productos',[crudController::class,'show'])->name('crud.show');
Route::get('/crud/productos/{id?}',[crudController::class,'unico'])->name('crud.unico');