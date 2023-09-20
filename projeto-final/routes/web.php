<?php

use App\Http\Controllers\GamesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/',[GamesController::class, 'index']);
Route::get('PageGame/{id}', [GamesController::class, 'gameId']);

Route::middleware('auth')->group(function(){
    Route::get('addGame', [GamesController::class, 'addGame']);
    Route::get('profileGames', [GamesController::class,'gameUser']);
    Route::get('editGame/{id}', [GamesController::class, 'editGame']);
    Route::post('addGame',[GamesController::class, 'addGame']);
    Route::post('editGame/{id}', [GamesController::class, 'editGame']);
    Route::get('delete/{id}', [GamesController::class, 'deleteGame']);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';