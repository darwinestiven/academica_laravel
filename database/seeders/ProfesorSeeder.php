<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos =[
            [
                'codprofesor' => '51',
                'nomprofesor' => 'Jose Mendoza',
                'catprofesor' => 'Hora Catedra'
            ],

            [
                'codprofesor' => '52',
                'nomprofesor' => 'Maria Cortez',
                'catprofesor' => 'Hora Catedra'
            ],

            [
                'codprofesor' => '53',
                'nomprofesor' => 'Juan Restrepo',
                'catprofesor' => 'Tiempo Completo'
            ],

            [
                'codprofesor' => '54',
                'nomprofesor' => 'Karla Ortiz',
                'catprofesor' => 'Tiempo Completo'
            ],

            [
                'codprofesor' => '55',
                'nomprofesor' => 'Dario Campos',
                'catprofesor' => 'Hora Catedra'
            ]
        ];
        DB::table('profesor')->insert($datos);
    }
}
