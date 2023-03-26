<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class usuario_sistema extends Model
{
    use HasFactory;

    protected $fillable = [
        'senha',
        'secretario_id',
        'tipo_usuario_id'
    ];

    public function secretario(): HasOne {
        return $this->hasOne('secretarios');
    }

    public function tipo_usuarios(): HasMany {
        return $this->hasMany('tipo_usuarios');
    }
}
