<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'contacts';
    

    public function personen()
    {
        return $this->belongsToMany(Persoon::class, 'contact_per_gezins', 'contact_id', 'gezin_id');
    }

    public static function updateContactAndPersonen($contactId, $contactData, $personenData)
    {
        $contactId = 1; // Example contact ID
        $contactData = [
            'email' => 'updated.email@example.com',
            'mobile' => '+31 612345678',
            'street' => 'Updated Street',
            'house_number' => '123',
            'additional_info' => 'Updated Additional Info',
            'postal_code' => '1234 AB',
            'city' => 'Updated City',];
        $personenData = [
            [
                'id' => 1,
                'voornaam' => 'Updated First Name',
                'tussenvoegsel' => 'Updated Prefix',
                'achternaam' => 'Updated Last Name',
                'geboortedatum' => '2021-06-26',
                'is_vertegenwoordiger' => true,
            ],
            [
                'id' => 2,
                'voornaam' => 'Updated Second First Name',
                'tussenvoegsel' => 'Updated Second Prefix',
                'achternaam' => 'Updated Second Last Name',
                'geboortedatum' => '2021-06-27',
                'is_vertegenwoordiger' => false,
            ],
        ];

        // Find the Contact by ID
        $contact = self::findOrFail($contactId);

        // Update Contact columns
        $contact->update($contactData);

        // Update associated Persoon columns
        foreach ($personenData as $persoonData) {
            $persoon = Persoon::findOrFail($persoonData['id']);
            $persoon->update($persoonData);
        }

        // If you need to perform more complex operations or checks, you can retrieve the Persoon model instances
        // and update them separately
        $personen = $contact->personen;
        foreach ($personen as $persoon) {
            $persoonData->firstWhere('id', $persoon->id);
            if ($persoonData) {
                $persoon->update($persoonData);
            }
        }

        // If you need to add new Persoon models, you can use the attach method
        $newPersoonData = [
            'voornaam' => 'New First Name',
            'tussenvoegsel' => 'New Prefix',
            'achternaam' => 'New Last Name',
            'geboortedatum' => '2021-06-28',
            'is_vertegenwoordiger' => false,
        ];
        $newPersoon = Persoon::create($newPersoonData);
        $contact->personen()->attach($newPersoon->id);

        // If you need to detach Persoon models, you can use the detach method
        $persoonIds = [3, 4];
        $contact->personen()->detach($persoonIds);

        // If you need to sync Persoon models, you can use the sync method
        $persoonIds = [5, 6];
        $contact->personen()->sync($persoonIds);

        // If you need to perform additional operations after updating the Contact and Persoon models, you can do so here
    }
}
