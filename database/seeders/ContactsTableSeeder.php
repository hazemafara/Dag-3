<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contacts')->insert([
            [
                'street' => 'Prinses Irenestraat',
                'house_number' => '12',
                'additional_info' => 'A',
                'postal_code' => '5271TH',
                'city' => 'Maaskantje',
                'email' => 'i.van.zevenhuizen@gmail.com',
                'mobile' => '+31 623456123'
            ],
            [
                'street' => 'Gibraltarstraat',
                'house_number' => '234',
                'additional_info' => null,
                'postal_code' => '5271TJ',
                'city' => 'Maaskantje',
                'email' => 'a.bergkamp@hotmail.com',
                'mobile' => '+31 623456123'
            ],
            [
                'street' => 'Der Kinderenstraat',
                'house_number' => '456',
                'additional_info' => 'Bis',
                'postal_code' => '5271TH',
                'city' => 'Maaskantje',
                'email' => 's.van.de.heuvel@gmail.com',
                'mobile' => '+31 623456123'
            ],
            [
                'street' => 'Nachtegaalstraat',
                'house_number' => '233',
                'additional_info' => 'A',
                'postal_code' => '5271TJ',
                'city' => 'Maaskantje',
                'email' => 'e.scherder@gmail.com',
                'mobile' => '+31 623456123'
            ],
            [
                'street' => 'Bertram Russellstraat',
                'house_number' => '45',
                'additional_info' => null,
                'postal_code' => '5271TH',
                'city' => 'Maaskantje',
                'email' => 'f.de.jong@hotmail.com',
                'mobile' => '+31 623456123'
            ],
            [
                'street' => 'Leonardo Da VinciHof',
                'house_number' => '34',
                'additional_info' => null,
                'postal_code' => '5271ZE',
                'city' => 'Maaskantje',
                'email' => 'h.van.der.berg@gmail.com',
                'mobile' => '+31 623456123'
            ],
            [
                'street' => 'Siegfried Knutsenlaan',
                'house_number' => '234',
                'additional_info' => null,
                'postal_code' => '5271ZE',
                'city' => 'Maaskantje',
                'email' => 'r.ter.weijden@ah.nl',
                'mobile' => '+31 623456123'
            ],
            [
                'street' => 'Theo de Bokstraat',
                'house_number' => '256',
                'additional_info' => null,
                'postal_code' => '5271ZH',
                'city' => 'Maaskantje',
                'email' => 'l.pastoor@gmail.com',
                'mobile' => '+31 623456123'
            ],
            [
                'street' => 'Meester van Leerhof',
                'house_number' => '2',
                'additional_info' => 'A',
                'postal_code' => '5271ZH',
                'city' => 'Maaskantje',
                'email' => 'm.yazidi@gemeenteutrecht.nl',
                'mobile' => '+31 623456123'
            ],
            [
                'street' => 'Van Wemelenplantsoen',
                'house_number' => '300',
                'additional_info' => null,
                'postal_code' => '5271TH',
                'city' => 'Maaskantje',
                'email' => 'b.van.driel@gmail.com',
                'mobile' => '+31 623456123'
            ],
            [
                'street' => 'Terlingenhof',
                'house_number' => '20',
                'additional_info' => null,
                'postal_code' => '5271TH',
                'city' => 'Maaskantje',
                'email' => 'j.pastorius@gmail.com',
                'mobile' => '+31 623456356'
            ],
            [
                'street' => 'Veldhoen',
                'house_number' => '31',
                'additional_info' => null,
                'postal_code' => '5271ZE',
                'city' => 'Maaskantje',
                'email' => 's.dollaard@gmail.com',
                'mobile' => '+31 623452314'
            ],
            [
                'street' => 'ScheringaDreef',
                'house_number' => '37',
                'additional_info' => null,
                'postal_code' => '5271ZE',
                'city' => 'Vught',
                'email' => 'j.blokker@gemeentevught.nl',
                'mobile' => '+31 623452314'
            ],
        ]);
    }
}
