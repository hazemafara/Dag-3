<?php

namespace App\Http\Controllers;

use App\Models\Leverancier;
use Illuminate\Http\Request;

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
            return redirect()->route('leveranciers.index');
        }
        $leveranciers = Leverancier::where('LeverancierType', $type)->get();
        return view('leveranciers.index', compact('leveranciers'));
    }
}

