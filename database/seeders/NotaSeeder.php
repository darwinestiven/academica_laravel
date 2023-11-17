<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos =[
            [
                'estudiante' => '95',
                'materia' => '41',
                'profesor' => '52',
                'parcial1' => '4.5',
                'parcial2' => '5.0',
                'efinal' => '4.0',
                'nfinal' => '4.1',
                'estado' => 'A'
            ],

            [
                'estudiante' => '92',
                'materia' => '42',
                'profesor' => '51',
                'parcial1' => '5.0',
                'parcial2' => '5.0',
                'efinal' => '5.0',
                'nfinal' => '5.0',
                'estado' => 'A'
            ],

            [
                'estudiante' => '92',
                'materia' => '44',
                'profesor' => '55',
                'parcial1' => '2.5',
                'parcial2' => '2.0',
                'efinal' => '3.0',
                'nfinal' => '2.6',
                'estado' => 'R'
            ],

            [
                'estudiante' => '94',
                'materia' => '43',
                'profesor' => '55',
                'parcial1' => '4.5',
                'parcial2' => '5.0',
                'efinal' => '3.0',
                'nfinal' => '3.5',
                'estado' => 'A'
            ],

            [
                'estudiante' => '93',
                'materia' => '45',
                'profesor' => '54',
                'parcial1' => '4.8',
                'parcial2' => '5.0',
                'efinal' => '4.0',
                'nfinal' => '4.4',
                'estado' => 'A'
            ]
        ];
        DB::table('nota')->insert($datos);
    }
}
