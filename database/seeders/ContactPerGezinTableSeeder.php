<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactPerGezinTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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
