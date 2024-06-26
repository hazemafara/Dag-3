<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Leverancier extends Model
{
    protected $table = 'leverancier';

    protected $fillable = [
        'Naam', 'ContactPerson', 'LeverancierNummer', 'LeverancierType'
    ];

    public function contactPerLeveranciers()
    {
        return $this->hasMany(ContactPerLeverancier::class);
    }

    public function contacts()
    {
        return $this->hasManyThrough(Contact::class, ContactPerLeverancier::class, 'leverancier_id', 'id', 'id', 'contact_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}