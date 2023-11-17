<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos =[
            [
                'codmateria' => '41',
                'nommateria' => 'Calculo Diferencial',
                'cremateria' => '3'
            ],

            [
                'codmateria' => '42',
                'nommateria' => 'Robotica',
                'cremateria' => '2'
            ],

            [
                'codmateria' => '43',
                'nommateria' => 'Ingles V',
                'cremateria' => '1'
            ],

            [
                'codmateria' => '44',
                'nommateria' => 'Seminario II',
                'cremateria' => '4'
            ],

            [
                'codmateria' => '45',
                'nommateria' => 'Software Grafico',
                'cremateria' => '2'
            ]
        ];
        DB::table('materia')->insert($datos);
    }
}
