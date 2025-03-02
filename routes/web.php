<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/login', function() {return view('login');})->name('login');

Route::get('/cadastrar', function() {return view('cadastrar');})->name('cadastrar');

Route::post('/user-login',  [UserController::class, 'login']);

Route::post('/user-register', [UserController::class,'register']);


Route::middleware(['auth']) ->group(function() {
    Route::get('/', function () {
        return view('agendamentos');
    });
    
    Route::post('/logout', [UserController::class, 'logout']);
    Route::post('register-clinica');
    
    Route::put('edit-clinica');
    
    Route::delete('delete-clinica');
    
    
    Route::get('/locais', function() {
        return view('locais');
    });
    Route::get('/principal', function() {
        return view('principal');
    });
    
    Route::get('/usuario', [UserController::class, 'getUser']);
    
    Route::get('/informativos', function() {
        return view('informativos');
    });
});