<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function register(Request $request) {
       
        $incomingFields =  $request->validate([
            'nome' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users','email')],
            'cpf' => ['required'],
            'cep' => ['required', 'min:8'],
            'senha' => ['required', 'min:8'],
            'confirmed_senha' => ['required', 'min:8', 'same:senha'],
        ]);

        $incomingFields['senha'] = bcrypt($incomingFields['senha']);

        $user = User::create($incomingFields);
        Auth::login($user);

        return redirect('/');
    }

    public function login(Request $request) {
        $incomingFields = $request->validate([
            'email' => 'required',
            'senha' => 'required'
        ]);

        if (Auth::attempt(['email' => $incomingFields['email'],'senha' => $incomingFields['senha']])) {
            $request->session()->regenerate();
        }

        return redirect('/');
    }

    public function logout() {
        Auth::logout();
        return redirect('login');
    }
}
