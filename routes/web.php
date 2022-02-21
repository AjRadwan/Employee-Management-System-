<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\RegistrationController;
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




Route::prefix('admin')->group(function (){
    Route::get('/',      [AdminController::class, 'index'])->name('admin.index');
    Route::get('login', [AdminController::class, 'login'])->name('admin.login');
    Route::post('login', [AdminController::class, 'store'])->name('admin.store'); 
    Route::get('logout', [AdminController::class, 'logout'])->name('admin.logout');
});

//DepartmentController
Route::resource('department', DepartmentController::class);
//EmployeeController
Route::resource('employee', EmployeeController::class);
 



