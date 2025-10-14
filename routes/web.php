<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainerController;
use App\Models\Trainer;


Route::get('/', function () {
    return view('welcome');
});


Route::resource('trainers', TrainerController::class);

Route::get('/trainers', function () {
    return view('trainer');
});

Route::get('/trainers', function () {
    $trainers = Trainer::all();
    return view('index', ['trainers' => $trainers]);
});
Route::get('/trainers/create', function () {
    return view('create');
});


Route::get('/delete/{id}', [TrainerController::class, 'destroy']);

Route::get('/trainers/{trainer}/edit', [TrainerController::class, 'edit'])->name('trainers.edit');
