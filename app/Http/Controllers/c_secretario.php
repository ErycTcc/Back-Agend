<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Abstraction\generic_controller;
use App\Models\secretario;
use Illuminate\Http\Request;

class c_secretario extends generic_controller
{
    public function __construct(Request $request, secretario $model)
    {
        parent::__construct($request, $model);
    }
}
