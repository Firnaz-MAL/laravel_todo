<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


route::get('/todo',[TodoController::class, 'index'])->name('todo');
route::post('/todo',[TodoController::class, 'store'])->name('todo.post');
route::put('/todo/{id}',[TodoController::class, 'update'])->name('todo.update');
route::delete('/todo/{id}',[TodoController::class, 'destroy'])->name('todo.delete');

