<?php

// Contact.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';

    // Optioneel: als je een relatie hebt met een leverancier, kun je dit hier definiëren.
    public function leverancier()
    {
        return $this->belongsTo(Leverancier::class);
    }
}
