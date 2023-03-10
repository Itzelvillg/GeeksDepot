<?php

use Illuminate\Support\Facades\Route;






// Rutas para el usuario


Route::view('/','index' )->name('inicio');
Route::view('newgeeks','secciones.newgeeks' )->name('blog');
Route::view('sobregd','secciones.sobregd' )->name('us');
Route::view('productos','secciones.productos' )->name('productos');
Route::view('cuenta','secciones.cuenta' )->name('micuenta');
Route::view('crearcuenta','secciones.crearcuenta' )->name('nuevacuenta');
Route::view('micuenta','secciones.vistausuario' )->name('usuario');


// Rutas para el admin


Route::view('administracion','admin.index' )->name('admin');
Route::view('userAdm','admin.secciones.usuario.index' )->name('admuser');
Route::view('blogAdm','admin.secciones.blog.index' )->name('admblog');
Route::view('brandAdm','admin.secciones.brand.index' )->name('admbrand');
Route::view('productAdm','admin.secciones.product.index' )->name('admproduct');
Route::view('purchaseAdm','admin.secciones.purchase.index' )->name('admpurchase');
Route::view('imgAdm','admin.secciones.image.index' )->name('admimage');








