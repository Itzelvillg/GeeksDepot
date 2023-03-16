<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ProductoUserController;
use Illuminate\Support\Facades\Route;






// Rutas para el usuario


Route::view('/','index' )->name('inicio');
Route::view('newgeeks','secciones.newgeeks' )->name('blog');
Route::view('sobregd','secciones.sobregd' )->name('us');
// Route::view('productos','secciones.productos' )->name('productos');
Route::view('cuenta','secciones.cuenta' )->name('micuenta');
Route::view('/detalle','secciones.detalle' )->name('sobre');
Route::view('crearcuenta','secciones.crearcuenta' )->name('nuevacuenta');
Route::view('micuenta','secciones.vistausuario' )->name('usuario');


// Rutas para el admin


Route::view('administracion','admin.index' )->name('admin');
Route::view('userAdm','admin.secciones.user.index' )->name('admuser');
Route::view('blogAdm','admin.secciones.blog.index' )->name('admblog');
Route::view('brandAdm','admin.secciones.brand.index' )->name('admbrand');
Route::view('productAdm','admin.secciones.product.index' )->name('admproduct');
Route::view('purchaseAdm','admin.secciones.purchase.index' )->name('admpurchase');
Route::view('imgAdm','admin.secciones.image.index' )->name('admimage');


// Rutas BD

Route::resource('/productAdmin', ProductController::class);
Route::resource('/blogAdmin',BlogController::class);
Route::resource('/brandAdmin',BrandController::class);
Route::resource('/userAdmin',UserController::class);
Route::resource('/imageAdmin',ImageController::class);


//Metodos de controladores
Route::get('/productos',[ProductoUserController::class, 'index']);
Route::get('/detalle/{id}',[ProductoUserController::class, 'show']);