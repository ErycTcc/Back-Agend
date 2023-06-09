<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class agenda_medico extends Model
{
    use HasFactory;

    protected $with = ['medicos'];

    protected $fillable = [
        'agenda_id',
        'cpf',
        'data',
        'hora_inicio',
        'hora_termino',
    ];

    public function agendas(): HasMany {
        return $this->hasMany('agendas');
    }

    public function medicos(): HasMany {
        return $this->hasMany(medico::class, 'cpf', 'cpf');
    }
}
