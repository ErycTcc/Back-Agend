<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class consulta extends Model
{
    use HasFactory;

    protected $fillable = [
        'descricao',
        'agendamento',
        'status',
        'cpf_medico',
        'cpf_paciente'
    ];

    public function peciente(): HasOne {
        return $this->hasOne('paciente');
    }

    public function medico(): HasOne {
        return $this->hasOne('medico');
    }
}
