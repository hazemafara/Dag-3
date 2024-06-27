<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;
use App\Models\Persoon;

class PersoonController extends Controller
{
    public function index(Request $request)
    {

        $postalCodes = Contact::select('postal_code')->distinct()->orderBy('postal_code')->get();

        $persoon = Contact::select(
            'contacts.id',
            'gezins.naam as gezin_naam',
            'personen.is_vertegenwoordiger as is_vertegenwoordiger',
            'contacts.email as contact_email',
            'contacts.mobile as contact_mobile',
            'contacts.street as contact_street',
            'contacts.house_number as house_number',
            'contacts.additional_info as additional_info',
            'contacts.postal_code as postal_code',
            'contacts.city as city'
        )
            ->join('contact_per_gezins', 'contacts.id', '=', 'contact_per_gezins.contact_id')
            ->join('personen', 'contact_per_gezins.gezin_id', '=', 'personen.gezin_id')
            ->join('gezins', 'contact_per_gezins.gezin_id', '=', 'gezins.id');

        if ($request->has('postal_code') && !empty($request->postal_code)) {
            $persoon->where('contacts.postal_code', $request->postal_code);
        }

        $persoon = $persoon->get();


        return view('persoon.index', ['persoon' => $persoon, 'postalCodes' => $postalCodes, 'selectedPostalCode' => $request->postal_code]);
    }

    public function klant()
    {
        $klant = Contact::select(
            'personen.id',
            'personen.voornaam as voornaam',
            'personen.tussenvoegsel as tussenvoegsel',
            'personen.achternaam as achternaam',
            'personen.geboortedatum as geboortedatum',
            'personen.is_vertegenwoordiger as is_vertegenwoordiger',
            'contacts.street as contact_street',
            'contacts.house_number as house_number',
            'contacts.additional_info as additional_info',
            'contacts.postal_code as postal_code',
            'contacts.city as city',
            'contacts.email as contact_email',
            'contacts.mobile as contact_mobile',
        )
            ->join('contact_per_gezins', 'contacts.id', '=', 'contact_per_gezins.contact_id')
            ->join('personen', 'contact_per_gezins.gezin_id', '=', 'personen.gezin_id')
            ->where('personen.type_persoon', 'klant')
            ->get();

        return view('persoon.klant', ['klant' => $klant]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'voornaam' => 'required',
            'tussenvoegsel' => 'nullable', // 'nullable' betekent dat het veld leeg mag zijn, 'required' betekent dat het veld verplicht is
            'achternaam' => 'required',
            'geboortedatum' => 'required',
            'is_vertegenwoordiger' => 'nullable',
            'contact_street' => 'required',
            'house_number' => 'required',
            'additional_info' => 'nullable', // 'nullable' betekent dat het veld leeg mag zijn, 'required' betekent dat het veld verplicht is
            'postal_code' => [
                'required',
                'regex:/^5271/'
            ],
            'city' => 'required',
            'contact_email' => 'required',
            'contact_mobile' => 'required',
        ], [
            'postal_code.regex' => 'Het ingevoerde postcode is buiten het regio Maaskantje.',
        ]);

        // Update the 'personen' table
        DB::table('personen')->where('id', $id)->update([
            'voornaam' => $request->voornaam,
            'tussenvoegsel' => $request->tussenvoegsel,
            'achternaam' => $request->achternaam,
            'geboortedatum' => $request->geboortedatum,
            'is_vertegenwoordiger' => $request->is_vertegenwoordiger ? 1 : 0,
        ]);

        // Definieer toegestane postcodes of logica om te bepalen of een postcode binnen dezelfde regio valt

        // Get the 'contact_id' associated with the 'gezin_id' of the person
        $contact_id = DB::table('contact_per_gezins')
            ->join('personen', 'contact_per_gezins.gezin_id', '=', 'personen.gezin_id')
            ->where('personen.id', $id)
            ->value('contact_per_gezins.contact_id');

        // Update the 'contacts' table
        if ($contact_id) {
            DB::table('contacts')->where('id', $contact_id)->update([
                'street' => $request->contact_street,
                'house_number' => $request->house_number,
                'additional_info' => $request->additional_info,
                'postal_code' => $request->postal_code,
                'city' => $request->city,
                'email' => $request->contact_email,
                'mobile' => $request->contact_mobile,
            ]);
        }



        return redirect()->route('persoon.index')
            ->with('success', 'Persoon is succesvol bijgewerkt.');
    }

    


    public function edit($id)
    {
        $klant = Contact::select(
            'personen.id',
            'personen.voornaam as voornaam',
            'personen.tussenvoegsel as tussenvoegsel',
            'personen.achternaam as achternaam',
            'personen.geboortedatum as geboortedatum',
            'personen.is_vertegenwoordiger as is_vertegenwoordiger',
            'contacts.street as contact_street',
            'contacts.house_number as house_number',
            'contacts.additional_info as additional_info',
            'contacts.postal_code as postal_code',
            'contacts.city as city',
            'contacts.email as contact_email',
            'contacts.mobile as contact_mobile'
        )
            ->join('contact_per_gezins', 'contacts.id', '=', 'contact_per_gezins.contact_id')
            ->join('personen', 'contact_per_gezins.gezin_id', '=', 'personen.gezin_id')
            ->where('personen.id', $id)
            ->first();

        return view('persoon.update', ['klant' => $klant]);
    }

    

}
