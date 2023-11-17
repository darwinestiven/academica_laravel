<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos =[
            [
                'codestudiante' => '91',
                'nomestudiante' => 'Jose Montoya',
                'edaestudiante' => '23',
                'fechestudiante' => '2000-11-02',
                'sexestudiante' => 'M',
                'ciudad' => '82',
                'barrio' => '21',
                'programa' => '75'
            ],

            [
                'codestudiante' => '92',
                'nomestudiante' => 'Sandra Burbano',
                'edaestudiante' => '20',
                'fechestudiante' => '2003-05-10',
                'sexestudiante' => 'F',
                'ciudad' => '81',
                'barrio' => '25',
                'programa' => '73'
            ],

            [
                'codestudiante' => '93',
                'nomestudiante' => 'Claudia Torres',
                'edaestudiante' => '21',
                'fechestudiante' => '2002-10-10',
                'sexestudiante' => 'F',
                'ciudad' => '81',
                'barrio' => '23',
                'programa' => '74'
            ],

            [
                'codestudiante' => '94',
                'nomestudiante' => 'Didier Melo',
                'edaestudiante' => '18',
                'fechestudiante' => '2005-09-28',
                'sexestudiante' => 'M',
                'ciudad' => '83',
                'barrio' => '22',
                'programa' => '71'
            ],

            [
                'codestudiante' => '95',
                'nomestudiante' => 'David Delgado',
                'edaestudiante' => '19',
                'fechestudiante' => '2004-04-30',
                'sexestudiante' => 'M',
                'ciudad' => '83',
                'barrio' => '22',
                'programa' => '75'
            ]
        ];
        DB::table('estudiante')->insert($datos);
    }
}
