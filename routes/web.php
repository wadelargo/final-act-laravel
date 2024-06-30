<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TrainorsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\TraineesController;
use App\Http\Controllers\CoursesController;
use Illuminate\Support\Facades\Route;

use function Ramsey\Uuid\v1;



Route::get('/', [HomeController::class, 'home'])->name('home');


Route::get('/users', [UsersController::class, 'index'])->name('users');
Route::get('/users/create', [UsersController::class, 'create']);
Route::post('/users/create', [UsersController::class, 'store']);
Route::get('/users/{user}', [UsersController::class, 'edit']);
Route::post('/users/{user}', [UsersController::class, 'update']);

Route::delete('/users/delete/{user}', [UsersController::class, 'delete']);


Route::get('/trainors', [TrainorsController::class, 'index'])->name('trainors');
Route::get('/trainors/create', [TrainorsController::class, 'create'])->name('trainors');
Route::post('/trainors/create', [TrainorsController::class, 'store'])->name('trainors');


Route::get('/trainees', [TraineesController::class, 'index'])->name('trainees');


Route::get('/courses', [CoursesController::class, 'index'])->name('courses');
