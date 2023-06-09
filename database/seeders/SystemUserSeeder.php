<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SystemUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipo_usuarios')->insert([
            [
                'descricao' => 'secretario',
            ],
            [
                'descricao' => 'medico',
            ],
            [
                'descricao' => 'paciente',
            ],
            [
                'descricao' => 'default',
            ]
        ]);
        DB::table('usuario_sistemas')->insert([
            [
                'email' => 'admin@admin.com',
                'senha' => Hash::make('123'),
                'cpf' => '111111111',
                'tipo_usuarios_id' => 1
            ]
        ]);
    }
}