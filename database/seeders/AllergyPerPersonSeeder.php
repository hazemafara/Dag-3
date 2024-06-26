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
            ['person_id' => 5, 'id' => 2],
            ['person_id' => 6, 'id' => 3],
            ['person_id' => 7, 'id' => 4],
            ['person_id' => 8, 'id' => 3],
            ['person_id' => 9, 'id' => 2],
            ['person_id' => 10, 'id' => 5],
            ['person_id' => 12, 'id' => 2],
            ['person_id' => 13, 'id' => 4],
            ['person_id' => 14, 'id' => 1],
            ['person_id' => 15, 'id' => 3],
            ['person_id' => 16, 'id' => 4],
            ['person_id' => 17, 'id' => 1],
            ['person_id' => 17, 'id' => 2],
            ['person_id' => 18, 'id' => 4],
            ['person_id' => 19, 'id' => 4],
        ];

        // Insert data into allergy_per_person table
        DB::table('allergy_per_person')->insert($allergyPerPerson);
    }
}
