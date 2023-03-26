<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Abstraction\generic_controller;
use App\Models\paciente;
use Illuminate\Http\Request;

class c_paciente extends generic_controller
{
    public function __construct(Request $request, paciente $model)
    {
        parent::__construct($request, $model);
    }
}
