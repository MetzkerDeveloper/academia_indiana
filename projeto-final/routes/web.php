<?php

use App\Http\Controllers\GamesController;
use App\Http\Controllers\ProfileController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
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

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});


 #region Socialite Logins
Route::get('login/{driver}/redirect', function ($driver) {

    return Socialite::driver($driver)->redirect();

})->name('login.social.redirect');
 

Route::get('auth/{driver}/callback', function ($driver) {

    $socialUser = Socialite::driver($driver)->user();
    
    $user = User::query()->firstOrCreate(['email'=>$socialUser->email], [
        'name'=> $socialUser->name,
        'password'=> bcrypt(Str::random(10))
    ]);

    Auth::login($user);

    return redirect('/');

});
#endregion
require __DIR__.'/auth.php';