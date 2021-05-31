<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Patient;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Patient::truncate();

        $faker = \Faker\Factory::create('pt_BR');

        for ($i = 0; $i < 5; $i++) {
            Patient::create([
                'nome' => $faker->name,
                'telefone' => $faker->cellphone(false),
            ]);
        }
    }
}
