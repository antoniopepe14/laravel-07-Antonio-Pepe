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
Route::get('/game/detail/{data}', [GameController::class, 'show'])->name('show.game');
// rotta per la modifica
Route::get('/game/edit/{data}', [GameController::class, 'edit'])->name('edit.game');
Route::put('/game/update/{data}',[GameController::class, 'update'])->name('update.game');
// rotta per la cancrllazione record
Route::delete('/game/delete/{data}',[GameController::class, 'destroy'])->name('destroy.game');
// rotta per il form email
Route::get('contact-us',[PublicController::class, 'form'] )->name('form');
Route::post('/contact-email', [PublicController::class, 'sendEmail'])->name('send.email');
// rotta per il filtro per categoria
Route::get('/games/category/{category}', [GameController::class, 'filterByCategory'])->name('game.filterByCategory');
