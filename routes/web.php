<?php

use App\Http\Controllers\ClinicaController;
use App\Http\Controllers\UserController;
use App\Models\Clinica;
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

    Route::post('/edit-user', [UserController::class, 'edit']);

    Route::post('register-clinica', [ClinicaController::class, 'register']);
    
    Route::put('edit-clinica', [ClinicaController::class, 'edit']);
    
    Route::delete('delete-clinica', [ClinicaController::class, 'delete']);
    
    
    Route::get('/locais', function() {

        $clinicas = Clinica::all();

        return view('locais', ['clinicas' => $clinicas]);
    });
    Route::get('/principal', function() {
        return view('principal');
    });
    
    Route::get('/usuario', [UserController::class, 'getUser']);
    
    Route::get('/informativos', function() {
        return view('informativos');
    });
});