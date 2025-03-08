<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Agendamento;

class ChatbotController extends Controller
{
    public function receberMensagem(Request $request)
    {
        $mensagemUsuario = $request->input('mensagem');
        // Recupera a etapa atual ou inicia na etapa 1
        $etapa = Session::get('chatbot_etapa', 1);
        $resposta = "";

        switch ($etapa) {
            case 1:
                Session::put('nome_clinica', $mensagemUsuario);
                $resposta = "Qual é a rua da clínica?";
                Session::put('chatbot_etapa', 2);
                break;

            case 2:
                Session::put('rua', $mensagemUsuario);
                $resposta = "Qual é a data do agendamento? (Formato: YYYY-MM-DD)";
                Session::put('chatbot_etapa', 3);
                break;

            case 3:
                Session::put('data', $mensagemUsuario);
                $resposta = "Qual é o horário do agendamento? (Formato: HH:MM)";
                Session::put('chatbot_etapa', 4);
                break;

            case 4:
                Session::put('hora', $mensagemUsuario);
                $resposta = "Qual é a situação do agendamento? (Confirmado/Pendente)";
                Session::put('chatbot_etapa', 5);
                break;

            case 5:
                Session::put('situacao', $mensagemUsuario);

                // Cria o agendamento no banco de dados
                Agendamento::create([
                    'nome_clinica' => Session::get('nome_clinica'),
                    'rua'          => Session::get('rua'),
                    'data'         => Session::get('data'),
                    'hora'         => Session::get('hora'),
                    'situacao'     => Session::get('situacao'),
                    'user_id'      => auth()->id ?? null,
                ]);

                // Limpa a sessão do chatbot
                Session::forget(['chatbot_etapa', 'nome_clinica', 'rua', 'data', 'hora', 'situacao']);

                $resposta = "Agendamento salvo com sucesso!";
                break;

            default:
                $resposta = "Olá, qual é o nome da clínica?";
                Session::put('chatbot_etapa', 1);
                break;
        }

        return response()->json(['resposta' => $resposta]);
    }
}
