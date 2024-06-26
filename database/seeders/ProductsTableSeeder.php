<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            ['CategorieId' => 1, 'Naam' => 'Aardappel', 'SoortAllergie' => null, 'Barcode' => '8719587321239', 'Houdbaarheidsdatum' => '2024-07-12', 'Omschrijving' => 'Kriumpige aardappel', 'Status' => 'OpVoorraad'],
            ['CategorieId' => 1, 'Naam' => 'Aardappel', 'SoortAllergie' => null, 'Barcode' => '8719587321339', 'Houdbaarheidsdatum' => '2024-07-26', 'Omschrijving' => 'Kriumpige aardappel', 'Status' => 'OpVoorraad'],
            ['CategorieId' => 1, 'Naam' => 'Ui', 'SoortAllergie' => null, 'Barcode' => '8719487321335', 'Houdbaarheidsdatum' => '2024-01-12', 'Omschrijving' => 'Gele ui', 'Status' => 'NietOpVoorraad'],
            ['CategorieId' => 1, 'Naam' => 'Appel', 'SoortAllergie' => null, 'Barcode' => '8719468321332', 'Houdbaarheidsdatum' => '2023-08-03', 'Omschrijving' => 'Granny Smith', 'Status' => 'NietLeverbaar'],
            ['CategorieId' => 1, 'Naam' => 'Appel', 'SoortAllergie' => null, 'Barcode' => '8719468321333', 'Houdbaarheidsdatum' => '2023-08-09', 'Omschrijving' => 'Granny Smith', 'Status' => 'NietLeverbaar'],
            ['CategorieId' => 1, 'Naam' => 'Banaan', 'SoortAllergie' => 'Banaan', 'Barcode' => '8719487321336', 'Houdbaarheidsdatum' => '2024-07-18', 'Omschrijving' => 'Biologische Banaan', 'Status' => 'OverhoudbaarheidsDatum'],
            ['CategorieId' => 1, 'Naam' => 'Banaan', 'SoortAllergie' => 'Banaan', 'Barcode' => '8719487321336', 'Houdbaarheidsdatum' => '2024-07-19', 'Omschrijving' => 'Biologische Banaan', 'Status' => 'OverhoudbaarheidsDatum'],
            ['CategorieId' => 2, 'Naam' => 'Kaas', 'SoortAllergie' => 'Lactose', 'Barcode' => '8719487321337', 'Houdbaarheidsdatum' => '2024-07-23', 'Omschrijving' => 'Jonge Kaas', 'Status' => 'OpVoorraad'],
            ['CategorieId' => 2, 'Naam' => 'Rosbief', 'SoortAllergie' => null, 'Barcode' => '8719487321338', 'Houdbaarheidsdatum' => '2024-07-25', 'Omschrijving' => 'Rundvlees', 'Status' => 'OpVoorraad'],
            ['CategorieId' => 2, 'Naam' => 'Melk', 'SoortAllergie' => 'Lactose', 'Barcode' => '8719487321339', 'Houdbaarheidsdatum' => '2024-08-02', 'Omschrijving' => 'Halfvolle melk', 'Status' => 'OpVoorraad'],
            ['CategorieId' => 2, 'Naam' => 'Margarine', 'SoortAllergie' => null, 'Barcode' => '8719487321336', 'Houdbaarheidsdatum' => '2024-08-04', 'Omschrijving' => 'Plantaardige boter', 'Status' => 'OpVoorraad'],
            ['CategorieId' => 4, 'Naam' => 'Ei', 'SoortAllergie' => 'Eier', 'Barcode' => '8719487421334', 'Houdbaarheidsdatum' => '2024-07-04', 'Omschrijving' => 'Scharrelei', 'Status' => 'OpVoorraad'],
            ['CategorieId' => 4, 'Naam' => 'Brood', 'SoortAllergie' => 'Gluten', 'Barcode' => '8719487321336', 'Houdbaarheidsdatum' => '2024-07-04', 'Omschrijving' => 'Scharrelei', 'Status' => 'OpVoorraad'],
            ['CategorieId' => 4, 'Naam' => 'Gevulde Koek', 'SoortAllergie' => 'Amandel', 'Barcode' => '8719487321336', 'Houdbaarheidsdatum' => '2024-07-07', 'Omschrijving' => 'Volkorren brood', 'Status' => 'OpVoorraad'],
            ['CategorieId' => 5, 'Naam' => 'Fristi', 'SoortAllergie' => 'Lactose', 'Barcode' => '8719487321336', 'Houdbaarheidsdatum' => '2024-10-28', 'Omschrijving' => 'Banketbakkers kwaliteit', 'Status' => 'NietOpVoorraad'],
            ['CategorieId' => 5, 'Naam' => 'Appelsap', 'SoortAllergie' => null, 'Barcode' => '8719487321336', 'Houdbaarheidsdatum' => '2024-10-18', 'Omschrijving' => '1000% vruchtensap', 'Status' => 'OpVoorraad'],
            ['CategorieId' => 5, 'Naam' => 'Koffie', 'SoortAllergie' => 'Caffeine', 'Barcode' => '8719487321338', 'Houdbaarheidsdatum' => '2024-10-23', 'Omschrijving' => 'Arabica koffie', 'Status' => 'OverhoudbaarheidsDatum'],
            ['CategorieId' => 5, 'Naam' => 'Thee', 'SoortAllergie' => 'Theine', 'Barcode' => '8719487321339', 'Houdbaarheidsdatum' => '2024-01-03', 'Omschrijving' => 'Ceylon thee', 'Status' => 'OpVoorraad'],
            ['CategorieId' => 5, 'Naam' => 'Pasta', 'SoortAllergie' => 'Gluten', 'Barcode' => '8719487321336', 'Houdbaarheidsdatum' => '2024-12-13', 'Omschrijving' => 'Macaroni', 'Status' => 'NietLeverbaar'],
            ['CategorieId' => 6, 'Naam' => 'Rijst', 'SoortAllergie' => null, 'Barcode' => '8719487321339', 'Houdbaarheidsdatum' => '2024-12-25', 'Omschrijving' => 'Basmati Rijst', 'Status' => 'OpVoorraad'],
            ['CategorieId' => 6, 'Naam' => 'Knorr Nasi Mix', 'SoortAllergie' => null, 'Barcode' => '8719487321338', 'Houdbaarheidsdatum' => '2024-12-23', 'Omschrijving' => 'Nasi kruiden', 'Status' => 'OpVoorraad'],
            ['CategorieId' => 7, 'Naam' => 'Tomatensoep', 'SoortAllergie' => null, 'Barcode' => '8719487321339', 'Houdbaarheidsdatum' => '2024-12-13', 'Omschrijving' => 'Romige tomatensoep', 'Status' => 'OpVoorraad'],
            ['CategorieId' => 7, 'Naam' => 'Tomatensaus', 'SoortAllergie' => null, 'Barcode' => '8719487321336', 'Houdbaarheidsdatum' => '2024-12-23', 'Omschrijving' => 'Pizza saus', 'Status' => 'OpVoorraad'],
            ['CategorieId' => 8, 'Naam' => 'Peterselie', 'SoortAllergie' => null, 'Barcode' => '8719487321339', 'Houdbaarheidsdatum' => '2024-12-25', 'Omschrijving' => 'Verse kruidenpot', 'Status' => 'OpVoorraad'],
            ['CategorieId' => 8, 'Naam' => 'Olie', 'SoortAllergie' => null, 'Barcode' => '8719487321337', 'Houdbaarheidsdatum' => '2024-12-27', 'Omschrijving' => 'Olijfolie', 'Status' => 'OpVoorraad'],
            ['CategorieId' => 8, 'Naam' => 'Mars', 'SoortAllergie' => null, 'Barcode' => '8719487321337', 'Houdbaarheidsdatum' => '2024-08-03', 'Omschrijving' => 'Snoep', 'Status' => 'OpVoorraad'],
            ['CategorieId' => 8, 'Naam' => 'Biscuit', 'SoortAllergie' => null, 'Barcode' => '8719487321331', 'Houdbaarheidsdatum' => '2024-08-07', 'Omschrijving' => 'San Francisco biscuit', 'Status' => 'OpVoorraad'],
            ['CategorieId' => 8, 'Naam' => 'Paprika Chips', 'SoortAllergie' => null, 'Barcode' => '8719487321389', 'Houdbaarheidsdatum' => '2024-12-22', 'Omschrijving' => 'Ribbelchips paprika', 'Status' => 'OpVoorraad'],
            ['CategorieId' => 8, 'Naam' => 'Chocolade reep', 'SoortAllergie' => 'Cacoa', 'Barcode' => '8719487321533', 'Houdbaarheidsdatum' => '2024-11-21', 'Omschrijving' => 'Tony Chocolonely', 'Status' => 'OpVoorraad'],
        ]);
    }
}
