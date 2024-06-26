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
        $klant = Persoon::select(
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
        );
        
        return view('persoon.klant');
    }
}
