<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacultadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos =[
            [
                'codfacultad' => '11',
                'nomfacultad' => 'Artes'
            ],

            [
                'codfacultad' => '12',
                'nomfacultad' => 'Ciencias Economicas'
            ],

            [
                'codfacultad' => '13',
                'nomfacultad' => 'Ingenieria'
            ],

            [
                'codfacultad' => '14',
                'nomfacultad' => 'Derecho'
            ],

            [
                'codfacultad' => '15',
                'nomfacultad' => 'Ciencias Humanas'
            ]
        ];
        DB::table('facultad')->insert($datos);
    }
}
