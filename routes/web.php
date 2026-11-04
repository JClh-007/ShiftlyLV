<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Rutas Principales / Sitio Público (html/index)
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('html.index.index');
});

Route::get('/contacto', function () {
    return view('html.index.contacto');
});

Route::get('/servicios', function () {
    return view('html.index.servicios');
});

/*
|--------------------------------------------------------------------------
| Rutas de Autenticación / Cuenta (html/login)
|--------------------------------------------------------------------------
*/

Route::get('/login', function () {
    return view('html.login.login');
});

Route::get('/registro', function () {
    return view('html.login.registro');
});

Route::get('/perfil', function () {
    return view('html.login.perfil');
});

Route::get('/recuperar-password', function () {
    return view('html.login.recuperar-password');
});

Route::get('/new-password', function () {
    return view('html.login.new-password');
});

Route::get('/verificacion-correo', function () {
    return view('html.login.verificacion-correo');
});

/*
|--------------------------------------------------------------------------
| Rutas del Dashboard / Panel de Usuario (html/dashboard)
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return view('html.dashboard.dashboard');
});

Route::get('/diagnostico', function () {
    return view('html.dashboard.diagnostico');
});

Route::get('/ejercicios', function () {
    return view('html.dashboard.Ejercicios');
});

Route::get('/glosario', function () {
    return view('html.dashboard.glosario');
});

Route::get('/recomendaciones', function () {
    return view('html.dashboard.recomendaciones');
});

Route::get('/resultado', function () {
    return view('html.dashboard.resultado');
});

Route::get('/resultados-leccion', function () {
    return view('html.dashboard.resultados-leccion');
});

Route::get('/ruta-aprendizaje', function () {
    return view('html.dashboard.rutaDeAprendizaje');
});