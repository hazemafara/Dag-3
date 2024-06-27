<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AllergiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('allergies')->insert([
            ['Id' => 1, 'Name' => 'Gluten', 'Description' => 'Allergisch voor gluten', 'AnaphylacticRisk' => 'Zeerlaag'],
            ['Id' => 2, 'Name' => 'Pindas', 'Description' => 'Allergisch voor pindas', 'AnaphylacticRisk' => 'Hoog'],
            ['Id' => 3, 'Name' => 'Schaaldieren', 'Description' => 'Allergisch voor schaaldieren', 'AnaphylacticRisk' => 'RedelijkHoog'],
            ['Id' => 4, 'Name' => 'Hazelnoten', 'Description' => 'Allergisch voor hazelnoten', 'AnaphylacticRisk' => 'laag'],
            ['Id' => 5, 'Name' => 'Lactose', 'Description' => 'Allergisch voor lactose', 'AnaphylacticRisk' => 'Zeerlaag'],
            ['Id' => 6, 'Name' => 'Soja', 'Description' => 'Allergisch voor soja', 'AnaphylacticRisk' => 'Zeerlaag'],
        ]);
    }
}
