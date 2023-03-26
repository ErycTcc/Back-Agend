<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class agenda extends Model
{
    use HasFactory;

    protected $fillable = [
        'medico_id'
    ];

    public function medicos(): HasMany {
        return $this->hasMany('medicos');
    }
}
