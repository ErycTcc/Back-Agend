<?php

use App\Http\Controllers\c_agenda;
use App\Http\Controllers\c_agenda_medico;
use App\Http\Controllers\c_consulta;
use App\Http\Controllers\c_medico;
use App\Http\Controllers\c_paciente;
use App\Http\Controllers\c_prontuario;
use App\Http\Controllers\c_secretario;
use App\Http\Controllers\c_tipo_consulta;
use App\Http\Controllers\c_tipo_usuario;
use App\Http\Controllers\c_usuario_sistema;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\c_auth;

Route::controller(c_auth::class)->group(function () {
    Route::post('/login', 'login');
    Route::post('/register', 'register');
    Route::post('/logout', 'logout')->middleware('auth:sanctum');
});

Route::prefix('usuario')->resource('usuario', c_auth::class, ['parameters' => ['usuario' => 'id']])->middleware('auth:sanctum');
Route::prefix('agenda')->resource('agenda', c_agenda::class, ['parameters' => ['agenda' => 'id']])->middleware('auth:sanctum');
Route::prefix('agenda_medico')->resource('agenda_medico', c_agenda_medico::class, ['parameters' => ['agenda_medico' => 'id']])->middleware('auth:sanctum');
Route::prefix('consulta')->resource('consulta', c_consulta::class, ['parameters' => ['consulta' => 'id']])->middleware('auth:sanctum');
Route::prefix('medico')->resource('medico', c_medico::class, ['parameters' => ['medico' => 'id']])->middleware('auth:sanctum');
Route::prefix('paciente')->resource('paciente', c_paciente::class, ['parameters' => ['paciente' => 'id']])->middleware('auth:sanctum');
Route::prefix('prontuario')->resource('prontuario', c_prontuario::class, ['parameters' => ['prontuario' => 'id']])->middleware('auth:sanctum');
Route::prefix('secretario')->resource('secretario', c_secretario::class, ['parameters' => ['secretario' => 'id']])->middleware('auth:sanctum');
Route::prefix('tipo_consulta')->resource('tipo_consulta', c_tipo_consulta::class, ['parameters' => ['tipo_consulta' => 'id']])->middleware('auth:sanctum');
Route::prefix('tipo_usuario')->resource('tipo_usuario', c_tipo_usuario::class, ['parameters' => ['tipo_usuario' => 'id']]);
Route::prefix('usuario_sistema')->resource('usuario_sistema', c_usuario_sistema::class, ['parameters' => ['usuario_sistema' => 'id']])->middleware('auth:sanctum');