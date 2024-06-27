<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Leverancier extends Model
{
    protected $table = 'leverancier';

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_per_leverancier', 'LeverancierId', 'ProductId')
        ->withPivot('DatumAangeleverd', 'DatumEerstVolgendeLevering');
    }

    public function contacts()
    {
        return $this->belongsToMany(Contact::class, 'contact_per_leverancier', 'leverancier_id', 'contact_id');
    }
}