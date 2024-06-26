<?php

namespace App\Http\Controllers;

use App\Models\ProductPerLeverancier;
use Illuminate\Http\Request;

class ProductPerLeverancierController extends Controller
{
    public function edit($leverancierId, $productId)
    {
        // Fetch the product per leverancier record
        $productPerLeverancier = ProductPerLeverancier::where('LeverancierId', $leverancierId)
            ->where('ProductId', $productId)
            ->firstOrFail(); // Assuming you expect a single record; use first() if multiple are expected
        
        // You can also eager load relations if needed
        $productPerLeverancier->load('leverancier', 'product');

        // Return a view with the data
        return view('productperleverancier.edit', [
            'productPerLeverancier' => $productPerLeverancier,
        ]);
    }

    // Add update method to handle the form submission to update the product per leverancier
    public function update(Request $request, $leverancierId, $productId)
    {
        // Validate incoming request data if needed

        // Find the product per leverancier record to update
        $productPerLeverancier = ProductPerLeverancier::where('LeverancierId', $leverancierId)
            ->where('ProductId', $productId)
            ->firstOrFail();

        // Update the relevant fields
        $productPerLeverancier->DatumAangeleverd = $request->input('DatumAangeleverd');
        $productPerLeverancier->DatumEerstVolgendeLevering = $request->input('DatumEerstVolgendeLevering');
        
        // Save the changes
        $productPerLeverancier->save();

        // Optionally, redirect back with a success message
        return redirect()->route('productperleverancier.edit', ['leverancierId' => $leverancierId, 'productId' => $productId])
            ->with('success', 'De houdbaarheidsdatum is gewijzigd.');
    }
}
