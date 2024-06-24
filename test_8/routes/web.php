<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PermisoController;
use App\Http\Controllers\ItemMenuController;



Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');
Route::get('/usuarios/create', [UsuarioController::class, 'create'])->name('usuarios.create');
Route::post('/usuarios/store', [UsuarioController::class, 'store'])->name('usuarios.store');
Route::get('/usuarios/{usuario}', [UsuarioController::class, 'show'])->name('usuarios.show');
Route::get('/usuarios/{usuario}/edit', [UsuarioController::class, 'edit'])->name('usuarios.edit');
Route::put('/usuarios/{usuario}/update', [UsuarioController::class, 'update'])->name('usuarios.update');
Route::delete('/usuarios/{usuario}/delete', [UsuarioController::class, 'destroy'])->name('usuarios.destroy');



Route::get('/perfiles', [PerfilController::class, 'index'])->name('perfiles.index');
Route::get('/perfiles/create', [PerfilController::class, 'create'])->name('perfiles.create');
Route::post('/perfiles/store', [PerfilController::class, 'store'])->name('perfiles.store');
Route::get('/perfiles/{perfil}', [PerfilController::class, 'show'])->name('perfiles.show');
Route::get('/perfiles/{perfil}/edit', [PerfilController::class, 'edit'])->name('perfiles.edit');
Route::put('/perfiles/{perfil}/update', [PerfilController::class, 'update'])->name('perfiles.update');
Route::delete('/perfiles/{perfil}/delete', [PerfilController::class, 'destroy'])->name('perfiles.destroy');


Route::get('menus', [MenuController::class, 'index'])->name('menus.index');
Route::get('menus/create', [MenuController::class, 'create'])->name('menus.create');
Route::post('menus', [MenuController::class, 'store'])->name('menus.store');
Route::get('menus/{menu}/edit', [MenuController::class, 'edit'])->name('menus.edit');
Route::put('menus/{menu}', [MenuController::class, 'update'])->name('menus.update');
Route::delete('menus/{menu}', [MenuController::class, 'destroy'])->name('menus.destroy');



Route::get('menu-items', [ItemMenuController::class, 'index'])->name('menu-items.index');
Route::get('menu-items/create', [ItemMenuController::class, 'create'])->name('menu-items.create');
Route::post('menu-items', [ItemMenuController::class, 'store'])->name('menu-items.store');
Route::get('menu-items/{menuItem}/edit', [ItemMenuController::class, 'edit'])->name('menu-items.edit');
Route::put('menu-items/{menuItem}', [ItemMenuController::class, 'update'])->name('menu-items.update');
Route::delete('menu-items/{menuItem}', [ItemMenuController::class, 'destroy'])->name('menu-items.destroy');




Route::get('permisos', [PermisoController::class, 'index'])->name('permisos.index');
Route::get('permisos/create', [PermisoController::class, 'create'])->name('permisos.create');
Route::post('permisos', [PermisoController::class, 'store'])->name('permisos.store');
Route::get('permisos/{permiso}/edit', [PermisoController::class, 'edit'])->name('permisos.edit');
Route::put('permisos/{permiso}', [PermisoController::class, 'update'])->name('permisos.update');
Route::delete('permisos/{permiso}', [PermisoController::class, 'destroy'])->name('permisos.destroy');
