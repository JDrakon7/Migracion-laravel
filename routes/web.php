<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccesoController;
use App\Http\Controllers\ConstanteController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\InboxController;
use App\Http\Controllers\KardexController;
use App\Http\Controllers\KardexApartaController;
use App\Http\Controllers\OrdenController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProductoOrdenController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EntradaController;
use App\Http\Controllers\EntradaApartaController;

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
    Route::post('constante/get-inbox-html', [ConstanteController::class, 'getInboxHtmlDataTable']);

    Route::resource('inboxes', InboxController::class);
    Route::resource('inventario', InventarioController::class);

    Route::get('/inventario', [InventarioController::class, 'index'])->name('inventario.index');
    Route::get('/inventario/{id}', [InventarioController::class, 'show'])->name('inventario.show');
    Route::get('/inventario/buscar', [InventarioController::class, 'search'])->name('inventario.search');

    Route::get('/kardex', [KardexController::class, 'index'])->name('kardex.index');
    Route::get('/kardex-aparta', [KardexApartaController::class, 'index']);
    Route::post('/kardex-aparta/data', [KardexApartaController::class, 'getInboxHtmlDataTable']);

    Route::resource('ordenes', OrdenController::class);

    Route::resource('productos', ProductoController::class);

    Route::get('productos/buscar', [ProductoOrdenController::class, 'buscar']);
    Route::get('productos/lista', [ProductoOrdenController::class, 'lista']);


    Route::group(['middleware' => 'auth'], function () {
        Route::get('/usuario', [UsuarioController::class, 'index']);
        Route::get('usuarios', [UsuarioController::class, 'index']);
        Route::get('usuarios/{id}', [UsuarioController::class, 'show']);
        Route::post('usuarios', [UsuarioController::class, 'store']);
        Route::put('usuarios/{id}', [UsuarioController::class, 'update']);
        Route::delete('usuarios/{id}', [UsuarioController::class, 'destroy']);
    });

    Route::post('/cliente/inbox', [ClienteController::class, 'getInboxHtmlDataTable']);
    return view('welcome');


    Route::get('/entrada', [EntradaController::class, 'index'])->name('entrada.index');


    Route::post('/entrada/inbox', [EntradaController::class, 'getInboxHtmlDataTable'])->name('entrada.inbox');

    Route::post('/entrada-aparta/inbox', [EntradaApartaController::class, 'getInboxHtmlDataTable']);

});
