<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Abstraction\generic_controller;
use App\Models\usuario_sistema;
use Illuminate\Http\Request;

class c_usuario_sistema extends generic_controller
{
    public function __construct(Request $request, usuario_sistema $model)
    {
        parent::__construct($request, $model);
    }
}
