<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\Painel\PainelController;
use App\Http\Controllers\Painel\BlacklistController;
use App\Http\Controllers\Painel\ProvedoresController;
use App\Http\Controllers\Painel\UserController;
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
    Route::get('/provedor', [ProvedoresController::class, 'index'])->name('provedor.index');    
    Route::any('/pesquisar', [ProvedoresController::class, 'search'])->name('provedor.search');   
    Route::get('{id}/destroy', [ProvedoresController::class, 'destroy'])->name('provedor.delete');
    Route::resource('provedor', ProvedoresController::class);    


    //Rotas Usuários
    Route::get('/usuarios', [UserController::class, 'index'])->name('user.index');       
    Route::any('/pesquisar', [UserController::class, 'search'])->name('user.search');   
    Route::get('{id}/destroy', [UserController::class, 'destroy'])->name('user.delete');
    Route::resource('user', UserController::class);    

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