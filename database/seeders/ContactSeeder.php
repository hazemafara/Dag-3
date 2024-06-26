<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact')->insert([
            [
                'Id' => 1,
                'Straat' => 'Griftstraat',
                'Huisnummer' => 231,
                'Toevoeging' => null,
                'Postcode' => '5271XE',
                'Woonplaats' => 'Maaskantje',
                'Email' => 'j.vanzwevenhuizen@gmail.com',
                'Mobiel' => '+31 6 23456123'
            ],
            [
                'Id' => 2,
                'Straat' => 'Gimstraat',
                'Huisnummer' => 34,
                'Toevoeging' => 'Bis',
                'Postcode' => '5271XE',
                'Woonplaats' => 'Maaskantje',
                'Email' => 'a.terheijden@gmail.com',
                'Mobiel' => '+31 6 23456123'
            ],
            [
                'Id' => 3,
                'Straat' => 'De Krederstraat',
                'Huisnummer' => 234,
                'Toevoeging' => null,
                'Postcode' => '5271XE',
                'Woonplaats' => 'Maaskantje',
                'Email' => 's.brel@gmail.com',
                'Mobiel' => '+31 6 23456123'
            ],
            [
                'Id' => 4,
                'Straat' => 'Bertrand Russellstraat',
                'Huisnummer' => 235,
                'Toevoeging' => null,
                'Postcode' => '5271XE',
                'Woonplaats' => 'Maaskantje',
                'Email' => 'b.stortweg@gmail.com',
                'Mobiel' => '+31 6 23456123'
            ],
            [
                'Id' => 5,
                'Straat' => 'Der Inderstraat',
                'Huisnummer' => 235,
                'Toevoeging' => null,
                'Postcode' => '5271XE',
                'Woonplaats' => 'Maaskantje',
                'Email' => 't.sanretter@gmail.com',
                'Mobiel' => '+31 6 23456123'
            ],
            [
                'Id' => 6,
                'Straat' => 'Bertusstraat',
                'Huisnummer' => 256,
                'Toevoeging' => null,
                'Postcode' => '5271XE',
                'Woonplaats' => 'Maaskantje',
                'Email' => 'c.andreberg@gmail.com',
                'Mobiel' => '+31 6 23456123'
            ],
            [
                'Id' => 7,
                'Straat' => 'Theo de Bokstraat',
                'Huisnummer' => 234,
                'Toevoeging' => null,
                'Postcode' => '5271XE',
                'Woonplaats' => 'Maaskantje',
                'Email' => 's.andreetorg@gmail.com',
                'Mobiel' => '+31 6 23456123'
            ],
            [
                'Id' => 8,
                'Straat' => 'Meester van Leenhof',
                'Huisnummer' => 30,
                'Toevoeging' => null,
                'Postcode' => '5271XE',
                'Woonplaats' => 'Maaskantje',
                'Email' => 'r.van.driel@gmail.com',
                'Mobiel' => '+31 6 23456123'
            ],
            [
                'Id' => 9,
                'Straat' => 'Terlingsmetpad',
                'Huisnummer' => 11,
                'Toevoeging' => null,
                'Postcode' => '5271XE',
                'Woonplaats' => 'Maaskantje',
                'Email' => 'r.van.derheijden@gemeenteutrecht.nl',
                'Mobiel' => '+31 6 23456123'
            ],
            [
                'Id' => 10,
                'Straat' => 'Veldhopen',
                'Huisnummer' => 300,
                'Toevoeging' => null,
                'Postcode' => '5271XE',
                'Woonplaats' => 'Maaskantje',
                'Email' => 'j.dollard@gemeentevught.nl',
                'Mobiel' => '+31 6 23456123'
            ],
            [
                'Id' => 11,
                'Straat' => 'ScheringaDreef',
                'Huisnummer' => 37,
                'Toevoeging' => null,
                'Postcode' => '5271XE',
                'Woonplaats' => 'Maaskantje',
                'Email' => 'j.blokker@gemeentevught.nl',
                'Mobiel' => '+31 6 23456123'
            ],
        ]);
    }
}
