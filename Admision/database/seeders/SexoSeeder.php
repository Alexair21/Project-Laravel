<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sexo;

class SexoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sexos = [
            'Masculino',
            'Femenino',
        ];

        foreach ($sexos as $sexo) {
            Sexo::create([
                'descripcion' => $sexo,
            ]);
        }
    }
}
