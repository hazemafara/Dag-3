<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    // Relatie met leveranciers via product_per_leverancier
    public function leveranciers()
    {
        return $this->belongsToMany(Leverancier::class, 'product_per_leverancier', 'ProductId', 'LeverancierId')
            ->using(ProductPerLeverancier::class)
            ->withPivot(['DatumAangeleverd', 'DatumEerstVolgendeLevering']);
    }
    
}