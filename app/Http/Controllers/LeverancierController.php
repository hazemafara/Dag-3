<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leverancier;

class LeverancierController extends Controller
{

    public function getContactDetails($id)
    {
        $leverancier = Leverancier::findOrFail($id);
        $contactDetails = $leverancier->getContactDetails();
        
        return response()->json($contactDetails);
    }

    public function index()
    {
        $leveranciers = Leverancier::with('contact')->get();
        
        return view('leveranciers.index', compact('leveranciers'));
    }

    public function show($id)
    {
        $leverancier = Leverancier::with('products', 'contacts')->find($id);
    
        if (!$leverancier) {
            abort(404); // Or handle the case where leverancier is not found
        }
    
        return view('leveranciers.show', compact('leverancier'));
    }
    
    
    

    public function filterByType(Request $request)
    {
        $type = $request->input('type');
    
        if ($type === 'all') {
            // Redirect or display all suppliers
            $leveranciers = Leverancier::all();
        } else {
            // Filter suppliers by type
            $leveranciers = Leverancier::where('LeverancierType', $type)->get();
        }
    
        return view('leveranciers.index', compact('leveranciers'));
    }
    
}

