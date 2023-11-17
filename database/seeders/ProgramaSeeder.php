<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos =[
            [
                'codprograma' => '71',
                'nomprograma' => 'Ingenieria de Sistemas',
                'facultad' => '13'
            ],

            [
                'codprograma' => '72',
                'nomprograma' => 'Artes Visuales',
                'facultad' => '11'
            ],

            [
                'codprograma' => '73',
                'nomprograma' => 'Ingenieria Civil',
                'facultad' => '13'
            ],

            [
                'codprograma' => '74',
                'nomprograma' => 'Economia',
                'facultad' => '12'
            ],

            [
                'codprograma' => '75',
                'nomprograma' => 'Medicina',
                'facultad' => '15'
            ]
        ];
        DB::table('programa')->insert($datos);
    }
}
