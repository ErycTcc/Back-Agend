<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Abstraction\generic_controller;
use App\Models\tipo_usuario;
use Illuminate\Http\Request;

class c_tipo_usuario extends generic_controller
{
    public function __construct(Request $request, tipo_usuario $model)
    {
        parent::__construct($request, $model);
    }
}
