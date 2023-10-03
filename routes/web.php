<?php

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
Route::get('/api/events', [TaskController::class, 'index']);    
Route::get('/api/events/{id}', [TaskController::class, 'show']); 
Route::post('/api/events', [TaskController::class, 'store']); 
Route::put('/api/events/{id}', [TaskController::class, 'update']); 
Route::delete('/api/events/{id}', [TaskController::class, 'destroy']); 
Route::get('/api/users', [TaskController::class, 'index']); 

Route::get('/events/new', [TaskController::class, 'newView']); 
Route::get('/api/edit/{id}', [TaskController::class, 'editview']); 
Route::get('/event/list', [TaskController::class, 'listView']); 

