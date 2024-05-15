<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AgenciaController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/listaagencias', [AgenciaController::class, 'listarAgencias'])->middleware(['auth', 'verified'])->name('Agencias');

//Hoteles
Route::get('/listahoteles', [HotelController::class, 'listarHoteles'])->middleware(['auth', 'verified'])->name('Hoteles');
Route::get('/listaniveles', [HotelController::class, 'listarNiveles'])->middleware(['auth', 'verified'])->name('Niveles');
Route::get('/crearhotel', [HotelController::class, 'crearHotel'])->middleware(['auth', 'verified'])->name('Crear Hotel');
Route::get('/verhotel', [HotelController::class, 'verHotel'])->middleware(['auth', 'verified'])->name('Ver Hotel');


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
