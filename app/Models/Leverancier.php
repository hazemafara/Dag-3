<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Leverancier extends Model
{
    protected $table = 'leverancier';

    // Relatie met producten via product_per_leverancier
    public function producten()
    {
        return $this->belongsToMany(Product::class, 'product_per_leverancier', 'LeverancierId', 'ProductId')
            ->using(ProductPerLeverancier::class)
            ->withPivot(['DatumAangeleverd', 'DatumEerstVolgendeLevering']);
    }
    

    // Relatie met contactgegevens
    public function contact()
    {
        return $this->hasOne(Contact::class, 'leverancier_id');
    }
}