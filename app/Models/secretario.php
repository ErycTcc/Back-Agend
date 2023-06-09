<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class secretario extends Model
{
    use HasFactory;

    protected $primaryKey = 'cpf';

    protected $keyType = 'string';

    protected $fillable = [
        'nome',
        'telefone',
        'email'
    ];
}
