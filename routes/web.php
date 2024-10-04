<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccesoController;
use App\Http\Controllers\ConstanteController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\InboxController;
use App\Http\Controllers\KardexController;
use App\Http\Controllers\OrdenController;
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

    Route::get('/login', [AccesoController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AccesoController::class, 'login']);
    Route::post('/logout', [AccesoController::class, 'logout'])->name('logout');
    Route::resource('constantes', ConstanteController::class);

    Route::resource('inboxes', InboxController::class);
    Route::resource('inventario', InventarioController::class);

    Route::get('/inventario', [InventarioController::class, 'index'])->name('inventario.index');
    Route::get('/inventario/{id}', [InventarioController::class, 'show'])->name('inventario.show');
    Route::get('/inventario/buscar', [InventarioController::class, 'search'])->name('inventario.search');

    Route::get('/kardex', [KardexController::class, 'index'])->name('kardex.index');

    Route::resource('ordenes', OrdenController::class);


    return view('welcome');
});
