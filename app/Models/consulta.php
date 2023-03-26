<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class consulta extends Model
{
    use HasFactory;

    protected $fillable = [
        'descricao',
        'agendamento',
        'status',
        'paciente_id',
        'medico_id'
    ];

    public function peciente(): HasOne {
        return $this->hasOne('pacientes');
    }

    public function medicos(): HasMany {
        return $this->hasMany('medicos');
    }
}
