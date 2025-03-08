<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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

    public function edit(Request $request) {
        $incomingFields =  $request->validate([
            'id' => ['required'],
            'nome' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users','email')],
            'cpf' => ['required'],
            'cep' => ['required', 'min:8'],
            'senha' => ['required', 'min:8'],
            'confirmed_senha' => ['required', 'min:8', 'same:senha'],
        ]);
    }

    public function login(Request $request) {
        $incomingFields = $request->validate([
            'email' => 'required|email',
            'senha' => 'required'
        ]);

        $email = $incomingFields['email'];
        $senha = $incomingFields['senha'];

        // Executa uma raw query para buscar o usuário pelo e-mail
        $users = DB::select('SELECT * FROM users WHERE email = ?', [$email]);

        // Verifica se encontrou algum usuário
        if (count($users) > 0) {
            // Acessa o primeiro usuário encontrado
        $user = $users[0];

        // Verifica se a senha informada confere com a senha hasheada armazenada
        if (Hash::check($senha, $user->senha)) {
            // Autentica o usuário manualmente utilizando o ID
            Auth::loginUsingId($user->id);

            // Regenera a sessão para aumentar a segurança
            $request->session()->regenerate();

            // Redireciona para a rota pretendida ou para a página inicial
            return redirect()->intended('/');
        }
        }

        // Caso a autenticação falhe, redireciona de volta com mensagem de erro
        return back()->withErrors([
            'email' => 'As credenciais não correspondem aos nossos registros.',
        ]);
    }

    public function logout() {
        Auth::logout();
        return redirect('login');
    }

    public function getUser() {
        $user = Auth::user();
        
        return view('usuario', ['user' => $user]); 
    }
}
