<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;  // Import the DB facade

class GezinsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('gezins')->insert([
            [
                'naam' => 'ZekenhuizenGezin',
                'code' => 'G0001',
                'omschrijving' => 'Bijstandsgezin',
                'aantal_volwassenen' => 2,
                'aantal_kinderen' => 2,
                'aantal_babys' => 0,
                'totaal_aantal_personen' => 4,
            ],
            [
                'naam' => 'BergkampGezin',
                'code' => 'G0002',
                'omschrijving' => 'Bijstandsgezin',
                'aantal_volwassenen' => 2,
                'aantal_kinderen' => 1,
                'aantal_babys' => 1,
                'totaal_aantal_personen' => 4,
            ],
            [
                'naam' => 'HeuxelGezin',
                'code' => 'G0003',
                'omschrijving' => 'Bijstandsgezin',
                'aantal_volwassenen' => 2,
                'aantal_kinderen' => 0,
                'aantal_babys' => 0,
                'totaal_aantal_personen' => 2,
            ],
            [
                'naam' => 'ScherderGezin',
                'code' => 'G0004',
                'omschrijving' => 'Bijstandsgezin',
                'aantal_volwassenen' => 1,
                'aantal_kinderen' => 0,
                'aantal_babys' => 2,
                'totaal_aantal_personen' => 3,
            ],
            [
                'naam' => 'DeLong Gezia',
                'code' => 'G0005',
                'omschrijving' => 'Bijstandsgezin',
                'aantal_volwassenen' => 1,
                'aantal_kinderen' => 1,
                'aantal_babys' => 0,
                'totaal_aantal_personen' => 2,
            ],
            [
                'naam' => 'VanderBerg Gezin',
                'code' => 'G0006',
                'omschrijving' => 'AlleenGaande',
                'aantal_volwassenen' => 1,
                'aantal_kinderen' => 0,
                'aantal_babys' => 0,
                'totaal_aantal_personen' => 1,
            ],
        ]);
    }
}
