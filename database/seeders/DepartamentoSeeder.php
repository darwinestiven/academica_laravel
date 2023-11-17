<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos =[
            [
                'coddepto' => '31',
                'nomdepto' => 'Nariño'
            ],

            [
                'coddepto' => '32',
                'nomdepto' => 'Putumayo'
            ],

            [
                'coddepto' => '33',
                'nomdepto' => 'Antioquia'
            ],

            [
                'coddepto' => '34',
                'nomdepto' => 'Cauca'
            ],

            [
                'coddepto' => '35',
                'nomdepto' => 'Tolima'
            ]
        ];
        DB::table('departamento')->insert($datos);
    }
}
