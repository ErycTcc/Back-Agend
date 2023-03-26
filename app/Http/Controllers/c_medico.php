<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Abstraction\generic_controller;
use App\Models\medico;
use Illuminate\Http\Request;

class c_medico extends generic_controller
{
    public function __construct(Request $request, medico $model)
    {
        parent::__construct($request, $model);
    }
}
