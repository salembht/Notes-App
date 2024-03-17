<?php

use App\Http\Controllers\NotesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/note',[NotesController::class ,'index'])->name('index');
Route::get('/notes/create', [NotesController::class,'create'])->name('notes.create');
Route::post('/notes',[NotesController::class,'store'] )->name('notes.store');
