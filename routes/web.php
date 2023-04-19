<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\Painel\PainelController;
use App\Http\Controllers\Painel\BlacklistController;
use App\Http\Controllers\Painel\ProvedoresController;
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

Route::get('/', [SiteController::class, 'index'])->name('site');

Route::middleware(['auth'])->group(function(){

    //Rotas Blacklists
    Route::get('/dashboard', [PainelController::class, 'index'])->name('dashboard');
    Route::get('/blacklist', [BlacklistController::class, 'index'])->name('blacklist.index');
    Route::post('/blacklist.store', [BlacklistController::class, 'store'])->name('blacklist.store');
    Route::get('/lista', [BlacklistController::class, 'lista'])->name('blacklist.lista');


    //Rotas Provedores
    Route::get('/index', [ProvedoresController::class, 'index'])->name('provedor.index');
    Route::get('/provedores', [ProvedoresController::class, 'create'])->name('provedor.create');
    Route::post('/store', [ProvedoresController::class, 'store'])->name('provedor.store');
    Route::get('/create', [ProvedoresController::class, 'create'])->name('provedor.create');
    Route::get('/show/{id}', [ProvedoresController::class, 'show'])->name('provedor.show');
    Route::get('/edit/{id}', [ProvedoresController::class, 'edit'])->name('provedor.edit');
    Route::put('/update/{id}', [ProvedoresController::class, 'update'])->name('provedor.update');


});

require __DIR__.'/auth.php';

/**
 Route::get('/', function () {
    return view('welcome');
});
*/


/** 
Route::get('/dashboard', [PainelController::class, 'index'])
->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

/**
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
*/