<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tdocumento;

class TdocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tdocumentos = [

            'DNI',
            'Pasaporte',
            'Carnet de Extranjeria',
            'Carnet de Identidad',
            'Carnet de Identidad del Militar',
        ];

        foreach ($tdocumentos as $tdocumento) {
            Tdocumento::create([
                'descripcion' => $tdocumento,
            ]);
        }
    }
}
