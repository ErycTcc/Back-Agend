<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medico extends Model
{
    use HasFactory;

    protected $primaryKey = 'cpf';

    protected $keyType = 'string';

    protected $fillable = [
        'cpf',
        'nome',
        'telefone',
        'genero',
        'crm',
        'tipo_consulta_id',
        'usuario_sistema_id',
    ];

}
