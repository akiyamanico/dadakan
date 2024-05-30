<?php

use App\Http\Controllers\CreateController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('create', [CreateController::class, 'index'])->name('create');
Route::get('edit/{id?}', [EditController::class, 'index'])->name('edit');
Route::get('delete/{id}', [DeleteController::class, 'delete'])->name('delete');

//POST DATA TO DADAKAN
Route::POST('createdata', [CreateController::class, 'create'])->name('createdata');
Route::POST('editdata/{id?}', [EditController::class, 'edit'])->name('editdata');
