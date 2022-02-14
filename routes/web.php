<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DepartmentController;
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
Route::get('admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('admin/login', [AdminController::class, 'store'])->name('admin.store');
Route::get('admin/logout', [AdminController::class, 'logout']);


//DepartmentController
Route::resource('department', DepartmentController::class);


Route::get('/', function () {
    return view('welcome');
});
