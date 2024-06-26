<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactPerLeverancier extends Model
{
    use HasFactory;

    protected $table = 'contact_per_leverancier';
    protected $fillable = ['leverancier_id', 'contact_id'];

    public function leverancier()
    {
        return $this->belongsTo(Leverancier::class);
    }

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }
}
