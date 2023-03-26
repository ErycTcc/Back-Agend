<?php

use App\Http\Controllers\c_agenda;
use App\Http\Controllers\c_consulta;
use App\Http\Controllers\c_endereco;
use App\Http\Controllers\c_medico;
use App\Http\Controllers\c_paciente;
use App\Http\Controllers\c_prontuario;
use App\Http\Controllers\c_secretario;
use App\Http\Controllers\c_tipo_consulta;
use App\Http\Controllers\c_tipo_usuario;
use App\Http\Controllers\c_usuario_sistema;
use Illuminate\Support\Facades\Route;

Route::prefix('agenda')->resource('agenda', c_agenda::class, ['parameters' => ['agenda' => 'id']]);
Route::prefix('consulta')->resource('consulta', c_consulta::class, ['parameters' => ['consulta' => 'id']]);
Route::prefix('endereco')->resource('endereco', c_endereco::class, ['parameters' => ['endereco' => 'id']]);
Route::prefix('medico')->resource('medico', c_medico::class, ['parameters' => ['medico' => 'id']]);
Route::prefix('paciente')->resource('paciente', c_paciente::class, ['parameters' => ['paciente' => 'id']]);
Route::prefix('prontuario')->resource('prontuario', c_prontuario::class, ['parameters' => ['prontuario' => 'id']]);
Route::prefix('secretario')->resource('secretario', c_secretario::class, ['parameters' => ['secretario' => 'id']]);
Route::prefix('tipo_consulta')->resource('tipo_consulta', c_tipo_consulta::class, ['parameters' => ['tipo_consulta' => 'id']]);
Route::prefix('tipo_usuario')->resource('tipo_usuario', c_tipo_usuario::class, ['parameters' => ['tipo_usuario' => 'id']]);
Route::prefix('usuario_sistema')->resource('usuario_sistema', c_usuario_sistema::class, ['parameters' => ['usuario_sistema' => 'id']]);