<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('agendamentos');
});

Route::get('/login', function() {
    return view('login');
});

Route::get('/cadastrar', function() {
    return view('cadastrar');
});

Route::get('/locais', function() {
    return view('locais');
});
Route::get('/principal', function() {
    return view('principal');
});
Route::get('/usuario', function() {
    return view('usuario');
});
Route::get('/informativos', function() {
    return view('informativos');
});