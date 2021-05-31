<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Procedure;

class ProcedureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Procedure::truncate();

        $procedures = array(
            'CONSULTA EM CONSULTORIO - CLINICO GERAL E ESPECIALIDADES',
            'CONSULTA URGENCIA/EMERGENCIA',
            'ATENDIMENTO AO RECEM-NASCIDO EM BERÇÁRIO'
        );

        $costs = array(
            60.25,
            90.50,
            200.99
        );

        for ($i = 0; $i <= 2; $i++) {
            Procedure::create([
                'nome' => $procedures[$i],
                'custo' => $costs[$i],
            ]);
        }
    }
}
