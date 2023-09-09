<?php

use App\Http\Controllers\BemvindoController;
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

Route::get('/bemvindo', [BemvindoController::class,'index']);

Route::get('/sair', [BemvindoController::class,'exit']);

Route::get('/usuarios/{id}', [BemvindoController::class,'users']);

Route::post('/usuario/{id}', [BemvindoController::class,'up']);

Route::get('/cadastrar', [BemvindoController::class,'create']);

Route::post('/cadastro', [BemvindoController::class,'create']);

Route::get('/delete/{id}', [BemvindoController::class,'delete']);

Route::get('/usuarios', [BemvindoController::class,'list_users']);

Route::get('/so',[BemvindoController::class, 'so'])->middleware('so');


// Route::get('/bemvindo', function () {
//     // return view('boasvindas.bemvindo');
//     //return 'Esta é minha rota!';
// });