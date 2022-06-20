<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/addnewtask', [App\Http\Controllers\TaskController::class, 'index'])->name('addnewtask');

Route::get('/managetasks', [App\Http\Controllers\TaskController::class, 'manageTasks'])->name('managetasks');

Route::get('/edit/{id}', [App\Http\Controllers\TaskController::class, 'editTask'])->name('editTask');

Route::post('/addtask', [\App\Http\Controllers\TaskController::class, 'addTask'])->name('addtask');

Route::get('/delete/{id}', [App\Http\Controllers\TaskController::class, 'deleteTask'])->name('deleteTask');

Route::post('/updatetask' ,[App\Http\Controllers\TaskController::class, 'updateTask'])->name('updatetask');