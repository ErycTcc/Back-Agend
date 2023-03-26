<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Abstraction\generic_controller;
use App\Models\endereco;
use Illuminate\Http\Request;

class c_endereco extends generic_controller
{
    public function __construct(Request $request, endereco $model)
    {
        parent::__construct($request, $model);
    }
}
