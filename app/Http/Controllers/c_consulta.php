<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Abstraction\generic_controller;
use App\Models\agenda_medico;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\consulta;

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

    public function store(): void
    {
        $agendamento = $this->request->agendamento;
        $dateAndTime = [
            'date' => explode(' ', $agendamento)[0],
            'time' => explode(' ', $agendamento)[1]
        ];

        $isMarked = consulta::where('agendamento', $agendamento)->exists();

        $isMedicFree = agenda_medico::where([
            ['data', $dateAndTime['date']],
            ['hora_inicio', '<=', $dateAndTime['time']],
            ['hora_termino', '>=', $dateAndTime['time']],
            ['cpf', $this->request->cpf_medico]
        ])->exists();

        if ($isMarked && $isMedicFree) $this->model->create($this->request->all());

        // return response()->json([
        //     'status'    => Response::HTTP_INTERNAL_SERVER_ERROR,
        //     'message'   => 'O médico não está disponível.',
        // ], Response::HTTP_INTERNAL_SERVER_ERROR);
        
    }
}
