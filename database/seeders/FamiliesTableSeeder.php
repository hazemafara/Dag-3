<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FamiliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $families = [
            [
                'name' => 'ZevenhuizenGezin',
                'code' => 'G0001',
                'description' => 'Bijstandsgezin',
                'amount_adults' => 2,
                'amount_kids' => 2,
                'amount_babies' => 0,
                'total_amount_people' => 4,
            ],
            [
                'name' => 'BergkampGezin',
                'code' => 'G0002',
                'description' => 'Bijstandsgezin',
                'amount_adults' => 2,
                'amount_kids' => 1,
                'amount_babies' => 1,
                'total_amount_people' => 4,
            ],
            [
                'name' => 'HeuvelGezin',
                'code' => 'G0003',
                'description' => 'Bijstandsgezin',
                'amount_adults' => 2,
                'amount_kids' => 0,
                'amount_babies' => 0,
                'total_amount_people' => 2,
            ],
            [
                'name' => 'ScherderlGezin',
                'code' => 'G0004',
                'description' => 'Bijstandsgezin',
                'amount_adults' => 1,
                'amount_kids' => 0,
                'amount_babies' => 2,
                'total_amount_people' => 3,
            ],
            [
                'name' => 'DeJongGezin',
                'code' => 'G0005',
                'description' => 'Bijstandsgezin',
                'amount_adults' => 1,
                'amount_kids' => 1,
                'amount_babies' => 0,
                'total_amount_people' => 2,
            ],
            [
                'name' => 'VanDenBergGezin',
                'code' => 'G0006',
                'description' => 'AlleenGaande',
                'amount_adults' => 1,
                'amount_kids' => 0,
                'amount_babies' => 0,
                'total_amount_people' => 1,
            ],
        ];

        // Insert data into families table
        DB::table('families')->insert($families);
    }
}
