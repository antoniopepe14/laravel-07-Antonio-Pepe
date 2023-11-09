<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PublicController;

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
// rotta per la home
Route::get('/', [PublicController::class, 'home'])->name('home');

// rotta GET per la visualizzazione del form
Route::get('/game/create', [GameController::class, 'create'])->name('game.create');
// rotta POST per ricevere i dati dal form e creare un nuovo record nel DB
Route::post('/game/store',  [GameController::class, 'store'])->name('game.store');
// rotta per elenco Game
Route::get('/games', [GameController::class, 'index'])->name('index.game');
// rotta per il dettaglio
Route::get('/game/detail/{id}', [GameController::class, 'show'])->name('show.game');