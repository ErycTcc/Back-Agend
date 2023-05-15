<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

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
        'endereco_id',
        'tipo_consulta_id',
        'usuario_sistema_id',
    ];

    public function endereco(): HasOne {
        return $this->hasOne('enderecos');
    }

    public function consulta(): HasOne {
        return $this->hasOne('tipo_consulta');
    }
}
