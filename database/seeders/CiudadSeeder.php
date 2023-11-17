<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CiudadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos =[
            [
                'codciudad' => '81',
                'nomciudad' => 'Orito',
                'departamento' => '32'
            ],

            [
                'codciudad' => '82',
                'nomciudad' => 'Puerto Asis',
                'departamento' => '32'
            ],

            [
                'codciudad' => '83',
                'nomciudad' => 'Ipiales',
                'departamento' => '31'
            ],

            [
                'codciudad' => '84',
                'nomciudad' => 'Pasto',
                'departamento' => '31'
            ],

            [
                'codciudad' => '85',
                'nomciudad' => 'Medellin',
                'departamento' => '33'
            ]
        ];
        DB::table('ciudad')->insert($datos);
    }
}
