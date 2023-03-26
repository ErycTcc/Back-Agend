<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Abstraction\generic_controller;
use App\Models\prontuario;
use Illuminate\Http\Request;

class c_prontuario extends generic_controller
{
    public function __construct(Request $request, prontuario $model)
    {
        parent::__construct($request, $model);
    }
}
