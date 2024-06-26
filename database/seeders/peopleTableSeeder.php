<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class peopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('people')->insert([
            ['id' => 1, 'FamilyId' => NULL, 'FirstName' => 'Hans', 'MiddleName' => 'van', 'LastName' => 'Leeuwen', 'BirthDate' => '1958-02-12', 'PersonType' => 'Manager', 'IsRepresentative' => NULL],
            ['id' => 2, 'FamilyId' => NULL, 'FirstName' => 'Jan', 'MiddleName' => 'van der', 'LastName' => 'Sluijs', 'BirthDate' => '1993-04-30', 'PersonType' => 'Medewerker', 'IsRepresentative' => NULL],
            ['id' => 3, 'FamilyId' => NULL, 'FirstName' => 'Herman', 'MiddleName' => 'den', 'LastName' => 'Duiker', 'BirthDate' => '1989-08-30', 'PersonType' => 'Vrijwilliger', 'IsRepresentative' => NULL],
            ['id' => 4, 'FamilyId' => 1, 'FirstName' => 'Johan', 'MiddleName' => 'van', 'LastName' => 'Zevenhuizen', 'BirthDate' => '1990-05-20', 'PersonType' => 'Klant', 'IsRepresentative' => NULL],
            ['id' => 5, 'FamilyId' => 1, 'FirstName' => 'Sarah', 'MiddleName' => 'den', 'LastName' => 'Dolder', 'BirthDate' => '1985-03-23', 'PersonType' => 'Klant', 'IsRepresentative' => NULL],
            ['id' => 6, 'FamilyId' => 1, 'FirstName' => 'Theo', 'MiddleName' => 'van', 'LastName' => 'Zevenhuizen', 'BirthDate' => '2015-03-08', 'PersonType' => 'Klant', 'IsRepresentative' => NULL],
            ['id' => 7, 'FamilyId' => 1, 'FirstName' => 'Jantien', 'MiddleName' => 'van', 'LastName' => 'Zevenhuizen', 'BirthDate' => '2016-09-20', 'PersonType' => 'Klant', 'IsRepresentative' => NULL],
            ['id' => 8, 'FamilyId' => 2, 'FirstName' => 'Arjan', 'MiddleName' => NULL, 'LastName' => 'Bergkamp', 'BirthDate' => '1968-07-12', 'PersonType' => 'Klant', 'IsRepresentative' => NULL],
            ['id' => 9, 'FamilyId' => 2, 'FirstName' => 'Janneke', 'MiddleName' => NULL, 'LastName' => 'Sanders', 'BirthDate' => '1969-05-11', 'PersonType' => 'Klant', 'IsRepresentative' => NULL],
            ['id' => 10, 'FamilyId' => 2, 'FirstName' => 'Stein', 'MiddleName' => NULL, 'LastName' => 'Bergkamp', 'BirthDate' => '2009-02-02', 'PersonType' => 'Klant', 'IsRepresentative' => NULL],
            ['id' => 11, 'FamilyId' => 2, 'FirstName' => 'Judith', 'MiddleName' => NULL, 'LastName' => 'Bergkamp', 'BirthDate' => '2022-02-05', 'PersonType' => 'Klant', 'IsRepresentative' => NULL],
            ['id' => 12, 'FamilyId' => 3, 'FirstName' => 'Mazin', 'MiddleName' => 'van', 'LastName' => 'Vliet', 'BirthDate' => '1968-08-18', 'PersonType' => 'Klant', 'IsRepresentative' => NULL],
            ['id' => 13, 'FamilyId' => 3, 'FirstName' => 'Selma', 'MiddleName' => 'van de', 'LastName' => 'Heuvel', 'BirthDate' => '1965-09-04', 'PersonType' => 'Klant', 'IsRepresentative' => NULL],
            ['id' => 14, 'FamilyId' => 4, 'FirstName' => 'Eva', 'MiddleName' => NULL, 'LastName' => 'Scherder', 'BirthDate' => '2000-04-07', 'PersonType' => 'Klant', 'IsRepresentative' => NULL],
            ['id' => 15, 'FamilyId' => 4, 'FirstName' => 'Felicia', 'MiddleName' => NULL, 'LastName' => 'Scherder', 'BirthDate' => '2021-11-29', 'PersonType' => 'Klant', 'IsRepresentative' => NULL],
            ['id' => 16, 'FamilyId' => 4, 'FirstName' => 'Devin', 'MiddleName' => NULL, 'LastName' => 'Scherder', 'BirthDate' => '2024-03-01', 'PersonType' => 'Klant', 'IsRepresentative' => NULL],
            ['id' => 17, 'FamilyId' => 5, 'FirstName' => 'Frieda', 'MiddleName' => 'de', 'LastName' => 'Jong', 'BirthDate' => '1980-09-04', 'PersonType' => 'Klant', 'IsRepresentative' => NULL],
            ['id' => 18, 'FamilyId' => 5, 'FirstName' => 'Simeon', 'MiddleName' => 'de', 'LastName' => 'Jong', 'BirthDate' => '2018-05-23', 'PersonType' => 'Klant', 'IsRepresentative' => NULL],
            ['id' => 19, 'FamilyId' => 6, 'FirstName' => 'Hanna', 'MiddleName' => 'van der', 'LastName' => 'Berg', 'BirthDate' => '1999-09-09', 'PersonType' => 'Klant', 'IsRepresentative' => NULL],
        ]);
    }
    }

