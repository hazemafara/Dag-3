<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Contact;

class Persoon extends Model
{
    use HasFactory;
    protected $table = 'personen';

    /**
     * Get the contact associated with the persoon.
     */
    public function contact()
    {
        return $this->hasOne(Contact::class, 'foreign_key', 'local_key');
    }
}
