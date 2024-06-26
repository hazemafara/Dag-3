<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AllergyPerPersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $allergyPerPerson = [
            ['person_id' => 4, 'allergy_id' => 1],
            ['person_id' => 5, 'allergy_id' => 2],
            ['person_id' => 6, 'allergy_id' => 3],
            ['person_id' => 7, 'allergy_id' => 4],
            ['person_id' => 8, 'allergy_id' => 3],
            ['person_id' => 9, 'allergy_id' => 2],
            ['person_id' => 10, 'allergy_id' => 5],
            ['person_id' => 12, 'allergy_id' => 2],
            ['person_id' => 13, 'allergy_id' => 4],
            ['person_id' => 14, 'allergy_id' => 1],
            ['person_id' => 15, 'allergy_id' => 3],
            ['person_id' => 16, 'allergy_id' => 5],
            ['person_id' => 17, 'allergy_id' => 1],
            ['person_id' => 17, 'allergy_id' => 2],
            ['person_id' => 18, 'allergy_id' => 4],
            ['person_id' => 19, 'allergy_id' => 4],
        ];

        // Insert data into allergy_per_person table
        DB::table('allergy_per_person')->insert($allergyPerPerson);
    }
}
