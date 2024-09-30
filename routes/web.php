<?php

use App\Http\Controllers\bookController;

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

Route::get('/', [bookController::class, 'index'])->name('books.index');
Route::get('/create',[bookController::class,'create'])->name('book.create');
Route::post('/create',[bookController::class,'store'])->name('book.store');
Route::get('/edit/{id}',[bookController::class,'edit'])->name('book.edit');
Route::put('/edit/{id}',[bookController::class,'update'])->name('book.update');
Route::delete('/delete/{id}',[bookController::class,'destroy'])->name('book.destroy');
    