<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeesController;
use App\Models\Employees;

Route::get('/', [EmployeesController::class, 'landingpage'])->name('landing');
Route::get('loginpage', [EmployeesController::class, 'loginpage'])->name('log');
Route::get('createaccount', [EmployeesController::class, 'createaccount'])->name('account');
Route::post('createaccount', [EmployeesController::class, 'createuser'])->name('user');
Route::get('homepage', [EmployeesController::class, 'homepage'])->name('home');
Route::post('loginpage', [EmployeesController::class, 'login'])->name('signin');
Route::post('logout', [EmployeesController::class, 'logout'])->name('signout');
Route::get('addemployees', [EmployeesController::class, 'addemployees'])->name('add');
Route::post('addemployees', [EmployeesController::class, 'store'])->name('storage');
Route::get('employeestable', [EmployeesController::class, 'employeestable'])->name('tables');
Route::get('/{employee}/edit', [EmployeesController::class, 'edit'])->name('edits');
Route::put('/{employee}', [EmployeesController::class, 'update'])->name('updates');
Route::delete('/{employee}', [EmployeesController::class, 'destroy'])->name('delete');
