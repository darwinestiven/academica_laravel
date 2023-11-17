<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DecanoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos =[
            [
                'coddecano' => '61',
                'nomdecano' => 'Carlos Diaz',
                'facultad' => '15'
            ],

            [
                'coddecano' => '62',
                'nomdecano' => 'Daniela Martinez',
                'facultad' => '14'
            ],

            [
                'coddecano' => '63',
                'nomdecano' => 'Martin Cossio',
                'facultad' => '13'
            ],

            [
                'coddecano' => '64',
                'nomdecano' => 'Juan Molina',
                'facultad' => '12'
            ],

            [
                'coddecano' => '65',
                'nomdecano' => 'Fernanda Gomez',
                'facultad' => '11'
            ]
        ];
        DB::table('decano')->insert($datos);
    }
}
