<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clinica extends Model
{
    protected $fillable = [
        'primeira_imagem',
        'segunda_imagem',
        'terceira_imagem',
        'nome_clinica',
        'rua_clinica',
        'telefone_clinica',
        'hora_abertura_clinica',
        'hora_fechamento_clinica',
        'situacao_clinica',
        'user_id'
    ];

    protected $casts = [
        'hora_abertura_clinica' => 'datetime:H:i',
        'hora_fechamento_clinica' => 'datetime:H:i',
    ];
}
