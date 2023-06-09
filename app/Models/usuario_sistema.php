<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class usuario_sistema extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'email',
        'senha',
        'cpf',
        'tipo_usuarios_id'
    ];

    protected $hidden = [
        'senha',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function secretario(): HasOne {
        return $this->hasOne('secretarios');
    }

    public function tipo_usuarios(): HasMany {
        return $this->hasMany('tipo_usuarios');
    }

    public function paciente(): HasOne {
        return $this->hasOne('pacientes');
    }

    public function medicos(): HasOne {
        return $this->hasOne('medicos');
    }
}

