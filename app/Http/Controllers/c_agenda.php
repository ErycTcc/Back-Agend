<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Abstraction\generic_controller;
use App\Models\agenda;
use Illuminate\Http\Request;

class c_agenda extends generic_controller
{
    public function __construct(Request $request, agenda $model)
    {
        parent::__construct($request, $model);
    }
}
