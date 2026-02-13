<?php

// Controllers
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Designation Routes
Route::get('/designation/create',  [DesignationController::class, 'create'])->name('designation.create');
Route::post('/designation/store', [DesignationController::class, 'store'])->name('designation.store');

// Employee Routes
Route::get('/employee/create',  [EmployeeController::class, 'create'])->name('employee.create');
Route::post('/employee/store', [EmployeeController::class, 'store'])->name('employee.store');