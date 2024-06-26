<?php

namespace App\Http\Controllers;

use App\Models\ContactPerLeverancier;
use Illuminate\Http\Request;

class ContactPerLeverancierController extends Controller
{
    public function index()
    {
        $contactsPerLeverancier = ContactPerLeverancier::with(['leverancier', 'contact'])->get();
        return response()->json($contactsPerLeverancier);
    }

    public function store(Request $request)
    {
        $request->validate([
            'leverancier_id' => 'required|exists:leveranciers,id',
            'contact_id' => 'required|exists:contacts,id',
        ]);

        $contactPerLeverancier = ContactPerLeverancier::create($request->all());
        return response()->json($contactPerLeverancier, 201);
    }

    public function show($id)
    {
        $contactPerLeverancier = ContactPerLeverancier::with(['leverancier', 'contact'])->findOrFail($id);
        return response()->json($contactPerLeverancier);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'leverancier_id' => 'required|exists:leveranciers,id',
            'contact_id' => 'required|exists:contacts,id',
        ]);

        $contactPerLeverancier = ContactPerLeverancier::findOrFail($id);
        $contactPerLeverancier->update($request->all());

        return response()->json($contactPerLeverancier);
    }

    public function destroy($id)
    {
        $contactPerLeverancier = ContactPerLeverancier::findOrFail($id);
        $contactPerLeverancier->delete();

        return response()->json(null, 204);
    }
}
