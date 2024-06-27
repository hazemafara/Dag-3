<?php

// app/Http/Controllers/ProductController.php

namespace App\Http\Controllers;

use App\Models\Leverancier;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function edit($productId)
    {
        $product = Product::findOrFail($productId);

        return view('products.edit', compact('product'));
    }
    
    public function update(Request $request, $productId)
    {
        try {
            $validatedData = $request->validate([
                'Houdbaarheidsdatum' => 'required|date',
            ]);
    
            $product = Product::findOrFail($productId);
            $product->update($validatedData);
            $leveranciers = Leverancier::with(['contacts', 'products'])->get();
            // find the leverancier that has the product
            $leverancier = $leveranciers->first(function ($leverancier) use ($product) {
                return $leverancier->products->contains($product);
            });

    
            // Redirect to the 'leveranciers.products' route with the leverancier model instance
            return redirect()->route('leveranciers.products', ['leverancier' => $leverancier->id])
                             ->with('success', 'Product updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to update product.');
        }
    }
    
    

    
}
