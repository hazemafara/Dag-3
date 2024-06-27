<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    // Define any other properties or relationships of the Contact model
    protected $table = 'contact'; // Assuming your table name is 'contact'

    public function leveranciers()
    {
        return $this->belongsToMany(Leverancier::class, 'contact_per_leverancier', 'contact_id', 'leverancier_id');
    }
}
