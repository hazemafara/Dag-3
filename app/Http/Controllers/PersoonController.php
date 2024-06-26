<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;
use App\Models\Persoon;

class PersoonController extends Controller
{
    public function index()
    {
        $persoon = Contact::select(
            'contacts.id',
            'gezins.naam as gezin_naam',
            'persoons.is_vertegenwoordiger as is_vertegenwoordiger',
            'contacts.email as contact_email',
            'contacts.mobile as contact_mobile',
            'contacts.street as contact_street',
            'contacts.house_number as house_number',
            'contacts.additional_info as additional_info',
            'contacts.postal_code as postal_code',
            'contacts.city as city'
        )
            ->join('contact_per_gezins', 'contacts.id', '=', 'contact_per_gezins.contact_id')
            ->join('persoons', 'contact_per_gezins.gezin_id', '=', 'persoons.gezin_id')
            ->join('gezins', 'contact_per_gezins.gezin_id', '=', 'gezins.id')
            ->get();


        return view('persoon.index', ['persoon' => $persoon]);
    }

    public function klant()
    {
        $klant = Contact::select(
            'persoons.id',
            'persoons.voornaam as voornaam',
            'persoons.tussenvoegsel as tussenvoegsel',
            'persoons.achternaam as achternaam',
            'persoons.geboortedatum as geboortedatum',
            'persoons.is_vertegenwoordiger as is_vertegenwoordiger',
            'contacts.street as contact_street',
            'contacts.house_number as house_number',
            'contacts.additional_info as additional_info',
            'contacts.postal_code as postal_code',
            'contacts.city as city',
            'contacts.email as contact_email',
            'contacts.mobile as contact_mobile',
        )
            ->join('contact_per_gezins', 'contacts.id', '=', 'contact_per_gezins.contact_id')
            ->join('persoons', 'contact_per_gezins.gezin_id', '=', 'persoons.gezin_id')
            ->where('persoons.type_persoon', 'klant')
            ->get();

        return view('persoon.klant', ['klant' => $klant]);
    }

    public function edit($id)
    {
        $klant = Contact::select(
            'persoons.id',
            'persoons.voornaam as voornaam',
            'persoons.tussenvoegsel as tussenvoegsel',
            'persoons.achternaam as achternaam',
            'persoons.geboortedatum as geboortedatum',
            'persoons.is_vertegenwoordiger as is_vertegenwoordiger',
            'contacts.street as contact_street',
            'contacts.house_number as house_number',
            'contacts.additional_info as additional_info',
            'contacts.postal_code as postal_code',
            'contacts.city as city',
            'contacts.email as contact_email',
            'contacts.mobile as contact_mobile',
        )
            ->join('contact_per_gezins', 'contacts.id', '=', 'contact_per_gezins.contact_id')
            ->join('persoons', 'contact_per_gezins.gezin_id', '=', 'persoons.gezin_id')
            ->where('persoons.type_persoon', 'klant')
            ->where('persoons.id', $id)
            ->first();

        return view('persoon.edit', ['klant' => $klant]);
    }

    public function store(Request $request)
    {

        // Validate the incoming request data.
        $validatedData = $request->validate([
            'voornaam' => 'required|string|max:255',
            'tussenvoegsel' => 'nullable|string|max:255',
            'achternaam' => 'required|string|max:255',
            'geboortedatum' => 'required|date',
            'is_vertegenwoordiger' => 'boolean',
            'contact_street' => 'required|string|max:255',
            'house_number' => 'nullable|string|max:50',
            'additional_info' => 'nullable|string|max:255',
            'postal_code' => 'required|string|max:20',
            'city' => 'required|string|max:255',
            'contact_email' => 'required|email|max:255',
            'contact_mobile' => 'required|string|max:20',
        ]);

        // Perform database operations inside a transaction.
        DB::transaction(function () use ($validatedData) {
            // Create a new product record.
            $persoon = new Persoon();
            $persoon->name = $validatedData['voornaam'];
            $persoon->tussenvoegsel = $validatedData['tussenvoegsel'];
            $persoon->achternaam = $validatedData['achternaam'];
            $persoon->geboortedatum = $validatedData['geboortedatum'];
            $persoon->is_vertegenwoordiger = $validatedData['is_vertegenwoordiger'];
            $persoon->save();

            // Create a new warehouse record linked to the product.
            $contact = new Contact();
            $contact->street = $validatedData['contact_street'];
            $contact->house_number = $validatedData['house_number'];
            $contact->additional_info = $validatedData['additional_info'];
            $contact->postal_code = $validatedData['postal_code'];
            $contact->city = $validatedData['city'];
            $contact->email = $validatedData['contact_email'];
            $contact->mobile = $validatedData['contact_mobile'];
            $contact->save();
        });

        // Redirect to the index route with a success message.
        return redirect()->route('persoon.index')->with('success', 'Product edited successfully.');

    }

}
