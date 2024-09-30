<?php

use App\Http\Controllers\EmployeesController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [EmployeesController::class, 'index'])->name('index');

Route::get('/add', [EmployeesController::class, 'create'])->name('add');

Route::post('/add', [EmployeesController::class,'addEmployee'])->name('addEmployee');

Route::delete('/delete/{id}', [EmployeesController::class,'delete'])->name('delete');

Route::get('/edit/{id}', [EmployeesController::class, 'editPage'])->name('editPage');

Route::post('/edit/{id}', [EmployeesController::class,'edit'])->name('edit');
