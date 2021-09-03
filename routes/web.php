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
});
Route::get('/admin', function () {
    return view('admin');
})->middleware('checklogin');
Route::get('/superAdmin', function () {
    return view('superAdmin');
})->middleware('checklogin');

Route::get('/user', function () {
    return view('user');
})->middleware('checklogin');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('checklogin');

Route::get('/employee',[App\Http\Controllers\Crud\EmployeeController::class, 'index'])->middleware('checklogin');
Route::post('/save',[App\Http\Controllers\Crud\EmployeeController::class, 'store'])->middleware('checklogin');
Route::get('/employeeShow',[App\Http\Controllers\Crud\EmployeeController::class, 'show'])->middleware('checklogin');
Route::get('/employee/delete/{id}',[App\Http\Controllers\Crud\EmployeeController::class, 'delete'])->middleware('checklogin');

Route::get('video',[App\Http\Controllers\Crud\VideoController::class, 'index']);