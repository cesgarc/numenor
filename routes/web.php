<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PreguntaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/preguntas', [PreguntaController::class, 'listarPreguntas'])->middleware(['auth', 'verified'])->name('Preguntas');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Users
/*Route::get('listUser', [UserController::class,'lista']);
Route::get('createUser', [UserController::class,'createUser']);
Route::post('createUserPost', [UserController::class,'createUserPost']);
Route::get('editUser/{Id}', [UserController::class,'editUser']);
Route::post('editUserPost', [UserController::class,'editUserPost']);
*/

Route::middleware('auth')->group(function () {
    Route::get('/listUser', [UserController::class, 'lista']);
    Route::get('/createUser', [UserController::class, 'createUser']);
    Route::get('/createUserPost', [UserController::class, 'createUserPost']);
    Route::get('/editUser/{Id}', [UserController::class, 'editUser']);
    Route::post('/editUserPost', [UserController::class, 'editUserPost']);
});

require __DIR__.'/auth.php';
