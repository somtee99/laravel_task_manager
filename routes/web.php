<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['prefix' => '/projects'], function(){
    Route::get('/', [ProjectController::class, 'show']);
    Route::get('/add', [ProjectController::class, 'showCreate']);
    Route::post('/create', [ProjectController::class, 'create']);
});

Route::group(['prefix' => '/tasks'], function(){
    Route::get('/{project_id}', [TaskController::class, 'show']);
    Route::get('/{project_id}/add', [TaskController::class, 'showCreate']);
    Route::post('/create', [TaskController::class, 'create']);
    Route::post('/update-order', [TaskController::class, 'updateTasksOrder']);
});


require __DIR__.'/auth.php';
