<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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

Route::get('/', function () {
    return view('welcome');
})->middleware('checklogin');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/employee',[App\Http\Controllers\Crud\EmployeeController::class, 'index']);
Route::post('/save',[App\Http\Controllers\Crud\EmployeeController::class, 'store']);
Route::get('/employeeShow',[App\Http\Controllers\Crud\EmployeeController::class, 'show']);
Route::get('/employee/delete/{id}',[App\Http\Controllers\Crud\EmployeeController::class, 'delete']);

Route::get('user',[App\Http\Controllers\Crud\UserController::class, 'index'])->middleware('checklogin');
Route::get('admin',[App\Http\Controllers\Crud\AdminController::class, 'index'])->middleware('checklogin');