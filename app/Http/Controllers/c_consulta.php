<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Abstraction\generic_controller;
use App\Models\consulta;
use Illuminate\Http\Request;

class c_consulta extends generic_controller
{
    public function __construct(Request $request, consulta $model)
    {
        parent::__construct($request, $model);
    }

    public function show()
    {
        return $this->model->where('cpf_paciente', $this->request->id)->get();
    }
}
