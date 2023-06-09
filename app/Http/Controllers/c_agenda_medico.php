<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Abstraction\generic_controller;
use App\Models\agenda_medico;
use Illuminate\Http\Request;

class c_agenda_medico extends generic_controller
{
    public function __construct(Request $request, agenda_medico $model)
    {
        parent::__construct($request, $model);
    }

    public function show()
    {
        return $this->model->where('cpf', $this->request->id)->get();
    }
}
