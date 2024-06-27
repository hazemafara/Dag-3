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


        DB::table('personen')->insert([
            [
                'gezin_id' => NULL,
                'voornaam' => 'Hans',
                'tussenvoegsel' => 'van',
                'achternaam' => 'Leeuwen',
                'geboortedatum' => '1958-02-12',
                'type_persoon' => 'Manager',
                'is_vertegenwoordiger' => 0,
            ],
            [
                'gezin_id' => NULL,
                'voornaam' => 'Jan',
                'tussenvoegsel' => 'van der',
                'achternaam' => 'Sluijs',
                'geboortedatum' => '1993-04-30',
                'type_persoon' => 'Medewerker',
                'is_vertegenwoordiger' => 0,
            ],
            [
                'gezin_id' => NULL,
                'voornaam' => 'Herman',
                'tussenvoegsel' => 'den',
                'achternaam' => 'Duiker',
                'geboortedatum' => '1989-08-30',
                'type_persoon' => 'Vrijwilliger',
                'is_vertegenwoordiger' => 0,
            ],
            [
                'gezin_id' => 1,
                'voornaam' => 'Johan',
                'tussenvoegsel' => 'van',
                'achternaam' => 'Zevenhuizen',
                'geboortedatum' => '1990-05-20',
                'type_persoon' => 'Klant',
                'is_vertegenwoordiger' => 1,
            ],
            [
                'gezin_id' => 1,
                'voornaam' => 'Sarah',
                'tussenvoegsel' => 'den',
                'achternaam' => 'Dolder',
                'geboortedatum' => '1985-03-23',
                'type_persoon' => 'Klant',
                'is_vertegenwoordiger' => 0,
            ],
            [
                'gezin_id' => 1,
                'voornaam' => 'Theo',
                'tussenvoegsel' => 'van',
                'achternaam' => 'Zevenhuizen',
                'geboortedatum' => '2015-03-08',
                'type_persoon' => 'Klant',
                'is_vertegenwoordiger' => 0,
            ],
            [
                'gezin_id' => 1,
                'voornaam' => 'Jantien',
                'tussenvoegsel' => 'van',
                'achternaam' => 'Zevenhuizen',
                'geboortedatum' => '2016-09-20',
                'type_persoon' => 'Klant',
                'is_vertegenwoordiger' => 0,
            ],
            [
                'gezin_id' => 2,
                'voornaam' => 'Arjan',
                'tussenvoegsel' => NULL,
                'achternaam' => 'Bergkamp',
                'geboortedatum' => '1968-07-12',
                'type_persoon' => 'Klant',
                'is_vertegenwoordiger' => 1,
            ],
            [
                'gezin_id' => 2,
                'voornaam' => 'Janneke',
                'tussenvoegsel' => NULL,
                'achternaam' => 'Sanders',
                'geboortedatum' => '1969-05-11',
                'type_persoon' => 'Klant',
                'is_vertegenwoordiger' => 0,
            ],
            [
                'gezin_id' => 2,
                'voornaam' => 'Stein',
                'tussenvoegsel' => NULL,
                'achternaam' => 'Bergkamp',
                'geboortedatum' => '2009-02-02',
                'type_persoon' => 'Klant',
                'is_vertegenwoordiger' => 0,
            ],
            [
                'gezin_id' => 2,
                'voornaam' => 'Judith',
                'tussenvoegsel' => NULL,
                'achternaam' => 'Bergkamp',
                'geboortedatum' => '2022-02-05',
                'type_persoon' => 'Klant',
                'is_vertegenwoordiger' => 0,
            ],
            [
                'gezin_id' => 3,
                'voornaam' => 'Mazin',
                'tussenvoegsel' => 'van',
                'achternaam' => 'Vliet',
                'geboortedatum' => '1968-08-18',
                'type_persoon' => 'Klant',
                'is_vertegenwoordiger' => 0,
            ],
            [
                'gezin_id' => 3,
                'voornaam' => 'Selma',
                'tussenvoegsel' => 'van de',
                'achternaam' => 'Heuvel',
                'geboortedatum' => '1965-09-04',
                'type_persoon' => 'Klant',
                'is_vertegenwoordiger' => 1,
            ],
            [
                'gezin_id' => 4,
                'voornaam' => 'Eva',
                'tussenvoegsel' => NULL,
                'achternaam' => 'Scherder',
                'geboortedatum' => '2000-04-07',
                'type_persoon' => 'Klant',
                'is_vertegenwoordiger' => 1,
            ],
            [
                'gezin_id' => 4,
                'voornaam' => 'Felicia',
                'tussenvoegsel' => NULL,
                'achternaam' => 'Scherder',
                'geboortedatum' => '2021-11-29',
                'type_persoon' => 'Klant',
                'is_vertegenwoordiger' => 0,
            ],
            [
                'gezin_id' => 4,
                'voornaam' => 'Devin',
                'tussenvoegsel' => NULL,
                'achternaam' => 'Scherder',
                'geboortedatum' => '2024-03-01',
                'type_persoon' => 'Klant',
                'is_vertegenwoordiger' => 0,
            ],
            [
                'gezin_id' => 5,
                'voornaam' => 'Frieda',
                'tussenvoegsel' => 'de',
                'achternaam' => 'Jong',
                'geboortedatum' => '1980-09-04',
                'type_persoon' => 'Klant',
                'is_vertegenwoordiger' => 1,
            ],
            [
                'gezin_id' => 5,
                'voornaam' => 'Simeon',
                'tussenvoegsel' => 'de',
                'achternaam' => 'Jong',
                'geboortedatum' => '2018-05-23',
                'type_persoon' => 'Klant',
                'is_vertegenwoordiger' => 0,
            ],
            [
                'gezin_id' => 6,
                'voornaam' => 'Hanna',
                'tussenvoegsel' => 'van der',
                'achternaam' => 'Berg',
                'geboortedatum' => '1999-09-09',
                'type_persoon' => 'Klant',
                'is_vertegenwoordiger' => 1,
            ],
        ]);

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

        DB::table('contact_per_gezins')->insert([
            [
                'gezin_id' => 1,
                'contact_id' => 1,
            ],
            [
                'gezin_id' => 2,
                'contact_id' => 2,
            ],
            [
                'gezin_id' => 3,
                'contact_id' => 3,
            ],
            [
                'gezin_id' => 4,
                'contact_id' => 4,
            ],
            [
                'gezin_id' => 5,
                'contact_id' => 5,
            ],
            [
                'gezin_id' => 6,
                'contact_id' => 6,
            ],
            [
                'gezin_id' => 7,
                'contact_id' => 7,
            ],
            [
                'gezin_id' => 8,
                'contact_id' => 8,
            ],
            [
                'gezin_id' => 9,
                'contact_id' => 9,
            ],
            [
                'gezin_id' => 10,
                'contact_id' => 10,
            ],
            [
                'gezin_id' => 11,
                'contact_id' => 11,
            ],
            [
                'gezin_id' => 12,
                'contact_id' => 12,
            ],
            [
                'gezin_id' => 13,
                'contact_id' => 13,
            ],
        ]);
    }
}
