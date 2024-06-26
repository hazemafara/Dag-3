<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeverancierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('leverancier')->insert([
            [
                'Id' => 1,
                'Naam' => 'Albert Heijn',
                'ContactPerson' => 'Ruud ter Velden',
                'LeverancierNummer' => 'L0001',
                'LeverancierType' => 'Bedrijf'
            ],
            [
                'Id' => 2,
                'Naam' => 'Huisarts',
                'ContactPerson' => 'Leo Stortweg',
                'LeverancierNummer' => 'L0002',
                'LeverancierType' => 'Instelling'
            ],
            [
                'Id' => 3,
                'Naam' => 'Gemeente Utrecht',
                'ContactPerson' => 'Mohammad Yazidi',
                'LeverancierNummer' => 'L0003',
                'LeverancierType' => 'Overheid'
            ],
            [
                'Id' => 4,
                'Naam' => 'Boerderij Meenthoven',
                'ContactPerson' => 'Bertus van Driel',
                'LeverancierNummer' => 'L0004',
                'LeverancierType' => 'Particulier'
            ],
            [
                'Id' => 5,
                'Naam' => 'Jan van der Heijden',
                'ContactPerson' => 'Jan van der Heijden',
                'LeverancierNummer' => 'L0005',
                'LeverancierType' => 'Particulier'
            ],
            [
                'Id' => 6,
                'Naam' => 'Dekamarkt',
                'ContactPerson' => 'Jaco Pastorius',
                'LeverancierNummer' => 'L0006',
                'LeverancierType' => 'Bedrijf'
            ],
            [
                'Id' => 7,
                'Naam' => 'Sligro',
                'ContactPerson' => 'Jan Blokker',
                'LeverancierNummer' => 'L0007',
                'LeverancierType' => 'Bedrijf'
            ],
            [
                'Id' => 8,
                'Naam' => 'Gemeente Vught',
                'ContactPerson' => 'Jan Dollard',
                'LeverancierNummer' => 'L0008',
                'LeverancierType' => 'Overheid'
            ],
        ]);
    }
}
