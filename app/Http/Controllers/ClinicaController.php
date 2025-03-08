<?php

namespace App\Http\Controllers;

use App\Models\Clinica;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClinicaController extends Controller
{
    public function register(Request $request) {
        $incomingFields = $request->validate([
            'primeira_imagem' => ['required', 'image','mimes:jpeg,png,jpg'],
            'segunda_imagem' => ['image','mimes:jpeg,png,jpg'],
            'terceira_imagem' => ['image','mimes:jpeg,png,jpg'],
            'nome_clinica' => ['required'],
            'rua_clinica'  => ['required'],
            'telefone_clinica'  => ['required'],
            'hora_abertura_clinica'  => ['required'],
            'hora_fechamento_clinica'  => ['required'],
            'situacao_clinica' => ['required'],
        ]);

        if ($request->hasFile('primeira_imagem')) {
            $imagem = $request->file('primeira_imagem');
            $conteudo = file_get_contents($imagem);
            $base64 = base64_encode($conteudo);
        }

        $incomingFields['user_id'] = Auth::id();

        Clinica::create($incomingFields);

        return redirect()->back()->withSuccess('Clínica cadastrada');
    }

    public function edit(Request $request) {
        $incomingFields = $request->validate([
            'id' => ['required'],
            'primeira_imagem' => ['required', 'image','mimes:jpeg,png,jpg'],
            'segunda_imagem' => ['image','mimes:jpeg,png,jpg'],
            'terceira_imagem' => ['image','mimes:jpeg,png,jpg'],
            'nome_clinica' => ['required'],
            'rua_clinica'  => ['required'],
            'telefone_clinica'  => ['required'],
            'hora_abertura_clinica'  => ['required'],
            'hora_fechamento_clinica'  => ['required'],
            'situacao_clinica' => ['required'],
        ]);

        $clinica = Clinica::find($incomingFields['id']);

        if(!$clinica) {
            return false;
        }

        if ($request->hasFile('primeira_imagem')) {
            $imagem = $request->file('primeira_imagem');
            $conteudo = file_get_contents($imagem);
            $base64 = base64_encode($conteudo);
        }

        $incomingFields['user_id'] = Auth::id();

        Clinica::update($incomingFields);
    }

    public function delete() {}
}
