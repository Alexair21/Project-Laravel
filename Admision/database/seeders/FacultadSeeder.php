<?php

namespace Database\Seeders;

use App\Models\Facultad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacultadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $facultades = [
            'Ciencias basicas y tecnologicas',
            'Ciencias de la vida y la salud',
            'Ciencias económicas'
        ];

        foreach ($facultades as $facultad) {
            Facultad::create([
                'nombre' => $facultad
            ]);
        }
    }
}
