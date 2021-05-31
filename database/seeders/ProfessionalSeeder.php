<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Professional;

class ProfessionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Professional::truncate();

        $cargo = array(
            'Neurologista',
            'Oftalmologista',
            'Clínico Geral',
            'Otorrino',
            'Nutricionista'
        );

        $faker = \Faker\Factory::create('pt_BR');

        for ($i = 0; $i < sizeof($cargo); $i++) {
            Professional::create([
                'nome' => $faker->name,
                'cargo' => $cargo[$i],
            ]);
        }
    }
}
