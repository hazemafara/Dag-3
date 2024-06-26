<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ProductPerLeverancier extends Pivot
{
    protected $table = 'product_per_leverancier';
    public $timestamps = false;

    public function leverancier()
    {
        return $this->belongsTo(Leverancier::class, 'LeverancierId', 'id');
    }

    // Define the Product relationship
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
    
}
