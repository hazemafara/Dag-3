<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false; // Disable timestamps
    protected $table = 'products';
    protected $fillable = [
        'CategorieId',
        'Naam',
        'SoortAllergie',
        'Barcode',
        'Houdbaarheidsdatum', // Add this line
        'Omschrijving',
        'Status',
    ];

    // Relatie met leveranciers via product_per_leverancier
    public function leveranciers()
    {
        return $this->belongsToMany(Leverancier::class, 'product_per_leverancier', 'ProductId', 'LeverancierId')
                    ->withPivot('DatumAangeleverd', 'DatumEerstVolgendeLevering');
    }


    public function leverancier()
    {
        return $this->belongsTo(Leverancier::class, 'leverancier_id'); // adjust 'leverancier_id' based on your actual foreign key name
    }

    public function contacts()
    {
        return $this->belongsToMany(Contact::class, 'product_per_leverancier', 'ProductId', 'ContactId')
                    ->withPivot('DatumAangeleverd', 'DatumEerstVolgendeLevering');
    }
    
}