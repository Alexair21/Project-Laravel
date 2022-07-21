<?php

namespace Database\Seeders;

use App\Models\Carrera;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $carreras = [
             /*Ciencias basicas y tecnologicas*/
             'Arquitectura',
             'Ingenieria Agronindustrial',
             'Ingeniería Civil',
             'Ingeniería Industrial',
             'Ingeniería Mecánica',
             'Ingeniería de Sistemas',

             /*Ciencias de la vida y de la salud*/
             'Enfermería',
             'Farmacia y Bioquímica',
             'Medicina',

             /*Ciencias economicas*/
             'Administración',
             'Contabilidad y Finanzas',
             'Economía',
        ];

        $descripcions = [
            //Descripcion de la carrera de arquitectura
            'Desde hace 11 años, la escuela de Arquitectura y Urbanismo, ha potenciado las aptitudes académicas de sus estudiantes y la capacidad de liderazgo.',
            'La Escuela Profesional de Ingeniería Agroindustrial, forma profesionales competitivos y éticos capaces de formar, planificar y gestionar proyectos y empresas para generación de productos y/o servicios agroindustriales.',
            'la Facultad de Ingeniería, presenta una propuesta curricular basada en competencias orientada a formar Ingenieros Civiles en un contexto de profundos cambios y avance tecnológico inusitado.',
            'La Escuela de Ingeniería Industrial, es una institución de educación superior que se encuentra en el contexto de la modernización de la industria que permite la formación de profesionales con competencias para la solución de problemas de la industria.',
            'La ingeniería mecánica está al alcance de todo aquel que desee dedicar sus años de estudio y su vida a entender científicamente cómo funciona el mundo desde una perspectiva curiosa,critica y racional.',
            'Los aspirantes al Programa de Estudios de Ingeniería de Sistemas deberán poseer habilidades para buscar, ordenar y utilizar la información de manera oportuna.',

            'Somos una unidad académica de la primera universidad republicana del Perú que forma profesionales de Enfermería con alto nivel académico, crítico, ético y humano para el cuidado de la salud y la vida del ser humano.',
            'Formar Químicos Farmacéuticos con ética y sentido social que investigan, desarrollan tecnología e innovan para aportar el desarrollo sostenible de la región y el país.',
            'Formar medicos competitivos, con alta capacidad academica,cientifica, tecnologica, etica y humanistica, comprometidos con el desarrollo de nuestro pais y preparados para afrontar su problematica socio-sanitaria',

            'La Escuela Profesional de Administración de Empresas viene formando Administradores de alta competitividad dentro de un marco teórico-práctico, para que sean capaces de desempeñarse eficientemente.',
            'La Escuela Académico Profesional de Contabilidad y Finanzas, desde hace 75 años viene contribuyendo al desarrollo económico y social de nuestro país mediante la formación de profesionales y contadores públicos de alto nivel académico.',
            'El objetivo fundamental de la Escuela Académico Profesional de Economía está orientado a satisfacer necesidades sentidas de la sociedad peruana.',
        ];

        $urls = [
            'https://media.discordapp.net/attachments/997183839799611443/997295808909160538/unknown.png',
            'https://media.discordapp.net/attachments/997183839799611443/997296678077992970/unknown.png',
            'https://media.discordapp.net/attachments/997183839799611443/997256123998552084/unknown.png?width=663&height=663',
            'https://media.discordapp.net/attachments/997183839799611443/997256439989010463/unknown.png',
            'https://media.discordapp.net/attachments/997183839799611443/997256517961142392/unknown.png?width=663&height=663',
            'https://media.discordapp.net/attachments/997183839799611443/997256652724117514/unknown.png',
            'https://media.discordapp.net/attachments/997183839799611443/997257371489402960/unknown.png',
            'https://media.discordapp.net/attachments/997183839799611443/997257555963302079/unknown.png?width=663&height=663',
            'https://media.discordapp.net/attachments/997183839799611443/997257904715464704/unknown.png',
            'https://media.discordapp.net/attachments/997183839799611443/997258106822205501/unknown.png?width=666&height=663',
            'https://media.discordapp.net/attachments/997183839799611443/997258206277554236/unknown.png?width=663&height=663',
            'https://media.discordapp.net/attachments/997183839799611443/997258548377567262/unknown.png?width=663&height=663',

        ];

        $facultades = [1,1,1,1,1,1,2,2,2,3,3,3];

        for ($i = 0; $i < count($carreras); $i++) {
            Carrera::create([
                'nombre' => $carreras[$i],
                'descripcion' => $descripcions[$i],
                'facultad_id' => $facultades[$i],
                'url' => $urls[$i],
            ]);
        }
    }
}

