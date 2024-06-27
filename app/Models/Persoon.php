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
        return $this->hasOne(Contact::class, 'contact_id');
    }

    public static function updatePersoonAndContact($persoonId, $persoonData, $contactData)
    {

        $persoonId = 1; // Example person ID
        $persoonData = [
            'voornaam' => 'Updated Name',
            'achternaam' => 'Updated Last Name',
            'geboortedatum' => '2021-06-26',
            'type_persoon' => 'Updated Type',
            'is_vertegenwoordiger' => true,
        ];
        $contactData = [
            'email' => 'updated.email@example.com',
            'mobile' => '+31 623456789',
            'street' => 'Updated Street',
            'house_number' => '123',
            'additional_info' => 'Updated Additional Info',
            'postal_code' => '1234 AB',
            'city' => 'Updated City',
        ];

        // Find the Persoon by ID
        $persoon = self::findOrFail($persoonId);

        // Update Persoon columns
        $persoon->update($persoonData);

        // Update associated Contact columns
        $persoon->contact()->update($contactData);

        // If you need to perform more complex operations or checks, you can retrieve the Contact model instance
        // and update it separately
        $contact = $persoon->contact;
        if ($contact) {
            $contact->update($contactData);
        }
    }
}
