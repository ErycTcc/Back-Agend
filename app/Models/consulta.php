<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class consulta extends Model
{
    use HasFactory;

    protected $with = ['agenda', 'paciente'];

    protected $fillable = [
        'descricao',
        'agendamento',
        'status',
        'cpf_medico',
        'cpf_paciente',
        'agenda_id'
    ];

    public function agenda(): HasOne {
        return $this->hasOne(agenda_medico::class, 'agenda_id', 'agenda_id');
    }

    public function medico(): HasOne {
        return $this->hasOne(medico::class. 'cpf', 'cpf_medico');
    }

    public function paciente(): HasOne {
        return $this->hasOne(paciente::class, 'cpf', 'cpf_paciente');
    }
}
