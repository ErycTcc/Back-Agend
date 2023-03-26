<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Abstraction\generic_controller;
use App\Models\tipo_consulta;
use Illuminate\Http\Request;

class c_tipo_consulta extends generic_controller
{
    public function __construct(Request $request, tipo_consulta $model)
    {
        parent::__construct($request, $model);
    }
}
