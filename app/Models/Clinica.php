<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clinica extends Model
{
    protected $fillable = [
        'nome',
        'rua',
        'telefone',
        'hora_abertura',
        'hora_fechamento',
        'situacao'
    ];
}
