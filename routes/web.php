<?php

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

//#session
Route::get('/ldt-session/get',[LDTSessionController::class,'ldtGetSessionData'])->name('ldtsession.get');
Route::get('/ldt-session/set',[LDTSessionController::class,'ldtStoreSessionData'])->name('ldtsession.set');
Route::get('/ldt-session/delete',[LDTSessionController::class,'ldtDeleteSessionData'])->name('ldtsession.delete');

//#account
Route::get('/ldt-login',[LDTAccountController::class,'ldtLogin'])->name('ldtaccount.ldtlogin');
Route::get('/ldt-logout',[LDTAccountController::class,'ldtLogout'])->name('ldtaccount.ldtLogout');
Route::post('/ldt-login',[LDTAccountController::class,'ldtLoginSubmit'])->name('ldtaccount.ldtloginsubmit');
