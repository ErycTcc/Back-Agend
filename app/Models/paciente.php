<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class paciente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'telefone',
        'genero',
        'idade',
        'peso',
        'altura',
        'cod_sus',
        'prontuario_id',
        'endereco_id'
    ];

    public function prontuario(): HasOne {
        return $this->hasOne('prontuarios');
    }

    public function endereco(): HasOne {
        return $this->hasOne('enderecos');
    }
}
