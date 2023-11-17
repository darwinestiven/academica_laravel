<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarrioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos =[
            [
                'codbarrio' => '21',
                'nombarrio' => 'La Floresta',
                'estbarrio' => '1',
                'comuna' => '5'
            ],

            [
                'codbarrio' => '22',
                'nombarrio' => 'Los Alpes',
                'estbarrio' => '1',
                'comuna' => '9'
            ],

            [
                'codbarrio' => '23',
                'nombarrio' => 'Morasurco',
                'estbarrio' => '6',
                'comuna' => '6'
            ],

            [
                'codbarrio' => '24',
                'nombarrio' => 'Los Angeles',
                'estbarrio' => '4',
                'comuna' => '2'
            ],

            [
                'codbarrio' => '25',
                'nombarrio' => 'Las Cruces',
                'estbarrio' => '5',
                'comuna' => '11'
            ]
        ];
        DB::table('barrio')->insert($datos);
    }
}
