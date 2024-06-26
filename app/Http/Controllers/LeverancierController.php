<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leverancier;

class LeverancierController extends Controller
{
    public function index()
    {
        $leveranciers = Leverancier::all();
        return view('leveranciers.index', compact('leveranciers'));
    }

    public function show(Leverancier $leverancier)
    {
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

