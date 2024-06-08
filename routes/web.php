<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ConfigurationController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\EmployerController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/', [AuthController::class,'handleLogin'])->name('handleLogin');

// Route sécurisée

Route::middleware('auth')->group(function () {
Route::get('dashboard', [AppController::class,'index'])->name('dashboard');


Route::prefix('departements')->group(function() {
Route::get('/',[DepartementController::class, 'index'])->name('departements.index');
Route::get('/create',[DepartementController::class, 'create'])->name('departements.create');
Route::post('/create',[DepartementController::class, 'store'])->name('departements.store');
Route::get('/edit/{departement}',[DepartementController::class, 'edit'])->name('departements.edit');
Route::put('/update/{departement}',[DepartementController::class, 'update'])->name('departements.update');
Route::get('/delete/{departement}',[DepartementController::class, 'delete'])->name('departements.delete');
});



Route::prefix('employers')->group(function() {
Route::get('/',[EmployerController::class, 'index'])->name('employers.index');
Route::get('/create',[EmployerController::class, 'create'])->name('employers.create');
Route::get('/edit/{employer}',[EmployerController::class, 'edit'])->name('employers.edit');

// Route d'action
Route::get('/delete/{employer}',[EmployerController::class, 'delete'])->name('employers.delete');
Route::put('/update/{employer}',[EmployerController::class, 'update'])->name('employers.update');
Route::post('/store',[EmployerController::class, 'store'])->name('employers.store');
});


Route::prefix('configurations')->group(function() {
Route::get('/',[ConfigurationController::class,'index'])->name('configurations');


});








});