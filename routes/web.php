<?php

use Illuminate\Support\Facades\Route;

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







Route::view('/','index' )->name('inicio');
Route::view('newgeeks','secciones.newgeeks' )->name('blog');
Route::view('sobregd','secciones.sobregd' )->name('us');
Route::view('productos','secciones.productos' )->name('productos');
Route::view('cuenta','secciones.cuenta' )->name('micuenta');
Route::view('crearcuenta','secciones.crearcuenta' )->name('nuevacuenta');
Route::view('micuenta','secciones.vistausuario' )->name('usuario');
Route::view('admon','admin.usuario.index' )->name('admn');





