<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $titulo = 'Home';
    return view('cliente.index', compact('titulo'));
})->name('cliente.index');

Route::get('/perfil', function () {
    $titulo = 'Perfil do Administrador';
    return view('administrador.perfil', compact('titulo'));
})->name('administrador.perfil');

