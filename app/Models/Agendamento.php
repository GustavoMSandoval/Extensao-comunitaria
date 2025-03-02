<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    protected $fillable = [
        'nome_clinica',
        'rua',
        'data',
        'hora',
        'situacao',
        'user_id'
    ];
}
