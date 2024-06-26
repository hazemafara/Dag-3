<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactPerLeverancierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_per_leverancier')->insert([
            ['leverancier_id' => 1, 'contact_id' => 7],
            ['leverancier_id' => 2, 'contact_id' => 8],
            ['leverancier_id' => 3, 'contact_id' => 9],
            ['leverancier_id' => 4, 'contact_id' => 10],
            ['leverancier_id' => 6, 'contact_id' => 11],
            ['leverancier_id' => 7, 'contact_id' => 12],
            ['leverancier_id' => 8, 'contact_id' => 13],
        ]);
    }
}
