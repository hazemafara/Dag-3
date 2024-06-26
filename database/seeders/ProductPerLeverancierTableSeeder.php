<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductPerLeverancierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_per_leverancier')->insert([
            ['LeverancierId' => 1, 'ProductId' => 1, 'DatumAangeleverd' => '2024-04-12', 'DatumEerstVolgendeLevering' => '2024-05-12'],
            ['LeverancierId' => 2, 'ProductId' => 2, 'DatumAangeleverd' => '2024-03-02', 'DatumEerstVolgendeLevering' => '2024-04-02'],
            ['LeverancierId' => 3, 'ProductId' => 3, 'DatumAangeleverd' => '2024-02-16', 'DatumEerstVolgendeLevering' => '2024-03-16'],
            ['LeverancierId' => 4, 'ProductId' => 4, 'DatumAangeleverd' => '2024-05-07', 'DatumEerstVolgendeLevering' => '2024-06-07'],
            ['LeverancierId' => 5, 'ProductId' => 5, 'DatumAangeleverd' => '2024-06-23', 'DatumEerstVolgendeLevering' => '2024-07-23'],
            ['LeverancierId' => 6, 'ProductId' => 6, 'DatumAangeleverd' => '2024-06-06', 'DatumEerstVolgendeLevering' => '2024-07-06'],
            ['LeverancierId' => 7, 'ProductId' => 7, 'DatumAangeleverd' => '2024-02-02', 'DatumEerstVolgendeLevering' => '2024-03-02'],
            ['LeverancierId' => 8, 'ProductId' => 8, 'DatumAangeleverd' => '2024-04-05', 'DatumEerstVolgendeLevering' => '2024-05-05'],
            ['LeverancierId' => 9, 'ProductId' => 9, 'DatumAangeleverd' => '2024-03-25', 'DatumEerstVolgendeLevering' => '2024-04-25'],
            ['LeverancierId' => 10, 'ProductId' => 10, 'DatumAangeleverd' => '2024-03-07', 'DatumEerstVolgendeLevering' => '2024-04-07'],
            ['LeverancierId' => 11, 'ProductId' => 11, 'DatumAangeleverd' => '2024-03-04', 'DatumEerstVolgendeLevering' => '2024-04-04'],
            ['LeverancierId' => 12, 'ProductId' => 12, 'DatumAangeleverd' => '2024-02-28', 'DatumEerstVolgendeLevering' => '2024-03-28'],
            ['LeverancierId' => 13, 'ProductId' => 13, 'DatumAangeleverd' => '2024-03-19', 'DatumEerstVolgendeLevering' => '2024-04-19'],
            ['LeverancierId' => 14, 'ProductId' => 14, 'DatumAangeleverd' => '2024-03-23', 'DatumEerstVolgendeLevering' => '2024-04-23'],
            ['LeverancierId' => 15, 'ProductId' => 15, 'DatumAangeleverd' => '2024-02-02', 'DatumEerstVolgendeLevering' => '2024-03-02'],
            ['LeverancierId' => 16, 'ProductId' => 16, 'DatumAangeleverd' => '2024-02-16', 'DatumEerstVolgendeLevering' => '2024-03-16'],
            ['LeverancierId' => 17, 'ProductId' => 17, 'DatumAangeleverd' => '2024-03-25', 'DatumEerstVolgendeLevering' => '2024-04-25'],
            ['LeverancierId' => 18, 'ProductId' => 18, 'DatumAangeleverd' => '2024-03-13', 'DatumEerstVolgendeLevering' => '2024-04-13'],
            ['LeverancierId' => 19, 'ProductId' => 19, 'DatumAangeleverd' => '2024-03-23', 'DatumEerstVolgendeLevering' => '2024-04-23'],
            ['LeverancierId' => 20, 'ProductId' => 20, 'DatumAangeleverd' => '2024-02-21', 'DatumEerstVolgendeLevering' => '2024-03-21'],
            ['LeverancierId' => 21, 'ProductId' => 21, 'DatumAangeleverd' => '2024-03-31', 'DatumEerstVolgendeLevering' => '2024-04-30'],
            ['LeverancierId' => 22, 'ProductId' => 22, 'DatumAangeleverd' => '2024-03-27', 'DatumEerstVolgendeLevering' => '2024-04-27'],
            ['LeverancierId' => 23, 'ProductId' => 23, 'DatumAangeleverd' => '2024-04-11', 'DatumEerstVolgendeLevering' => '2024-04-18'],
            ['LeverancierId' => 24, 'ProductId' => 24, 'DatumAangeleverd' => '2024-04-11', 'DatumEerstVolgendeLevering' => '2024-04-18'],
            ['LeverancierId' => 25, 'ProductId' => 25, 'DatumAangeleverd' => '2024-05-07', 'DatumEerstVolgendeLevering' => '2024-06-07'],
            ['LeverancierId' => 26, 'ProductId' => 26, 'DatumAangeleverd' => '2024-05-05', 'DatumEerstVolgendeLevering' => '2024-06-05'],
        ]);
    }
}
