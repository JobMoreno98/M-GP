<?php

namespace Database\Seeders;

use App\Models\carrusel;
use Illuminate\Database\Seeder;

class CarruselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $carrusel = [
            [
                'IMGPATH' => 'images/Banner8.png',
                'TITLE' => 'Centro Universitario de Ciencias Sociales y Humanidades',
                'COTENIDO' => 'Programa de Reciente Creación Reconocido por el Programa Nacional de Posgrados de
                Calidad (PNPC) de Conacyt.',
                'BUTTONTEXT' => 'Contáctanos'
            ],
            [
                'IMGPATH' => 'images/Banner_principal2.png',
                'TITLE' => 'Lorem Ipsum dolor sit ametaliqua.',
                'COTENIDO' => ' Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor',
                'BUTTONTEXT' => 'Contáctanos'
            ],
            [
                'IMGPATH' => 'images/Homenaje_Dra.Melba.png',
                'TITLE' => 'Reconocimiento de la Embajada de Japón a la Dra. Melba Falck.',
                'COTENIDO' => 'El Gobierno de Japón le entregó el Pergamino y la Orden del Sol Naciente en grado de Rayos de Oro con Collar de Listón el pasado 27 de abril.',
                'BUTTONTEXT' => 'Contáctanos'
            ]
        ];

        foreach($carrusel as $key => $item){
            Carrusel::create($item);
        }
    }
}
