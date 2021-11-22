<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Crud;

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
//Route::get('/student' , App\Http\Livewire\Crud::class);
//Route::get('students', Crud::class);
Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/data', function () {
    return view('data');
})->name('data');

Route::middleware(['auth:sanctum', 'verified'])->get('/student', function () {
    return view('student');
})->name('student');
