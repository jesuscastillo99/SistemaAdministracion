<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ExpedienteController;


/*
|--------------------------------------------------------------------------
| RUTA PRINCIPAL
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return redirect()->route('login');
});


/*
|--------------------------------------------------------------------------
| RUTAS PARA INVITADOS
|--------------------------------------------------------------------------
*/

Route::middleware('guest')->group(function () {

    Route::get('/login', [LoginController::class, 'showLoginForm'])
        ->name('login');

    Route::post('/login', [LoginController::class, 'login'])
        ->name('login.attempt');

});


/*
|--------------------------------------------------------------------------
| RUTAS PROTEGIDAS POR AUTENTICACIÓN
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | CERRAR SESIÓN
    |--------------------------------------------------------------------------
    */

    Route::post('/logout', [LoginController::class, 'logout'])
        ->name('logout');


    /*
    |--------------------------------------------------------------------------
    | DASHBOARD
    |--------------------------------------------------------------------------
    */

    Route::get('/dashboard', function () {
        return view('solicitud.index');
    })->name('dashboard');


   


    /*
    |--------------------------------------------------------------------------
    | EXPEDIENTES
    |--------------------------------------------------------------------------
    */

    Route::get(
        '/expedientes',
        [ExpedienteController::class, 'index']
    )->name('solicitud.index');


    


    

});