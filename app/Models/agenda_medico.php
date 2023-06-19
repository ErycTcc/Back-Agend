<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class agenda_medico extends Model
{
    use HasFactory;

    protected $with = ['medicos', 'agendas'];

    protected $fillable = [
        'agenda_id',
        'cpf',
        'data',
        'hora_inicio',
        'hora_termino',
        'status'
    ];

    public function agendas(): HasOne {
        return $this->hasOne(agenda::class, 'id', 'agenda_id');
    }

    public function medicos(): HasOne {
        return $this->hasOne(medico::class, 'cpf', 'cpf');
    }

    // public function consulta(): HasOne {
    //     return $this->hasOne(consulta::class, 'agenda_id', 'agenda_id');
    // }
}
