<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return '
    <h1>⚽ Hala Madrid ⚽</h1>
    <p>Mi primera aplicación Laravel ejecutándose en Docker.</p>
    <a href="/acerca">Ir a Acerca</a>
    ';
});

Route::get('/acerca', function () {
    return '
    <h1>Acerca del Proyecto</h1>
    <p>Proyecto de demostración Laravel + Docker + Render.</p>
    <a href="/">Volver al inicio</a>
    ';
});
