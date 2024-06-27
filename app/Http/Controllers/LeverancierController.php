<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leverancier;
use App\Http\Controllers\LeverancierController;

class LeverancierController extends Controller
{
    public function index()
    {
        // $leveranciers = Leverancier::with(['products', 'contact'])->get();
        // return view('leveranciers.index', compact('leveranciers'));
        $leveranciers = Leverancier::with(['contacts', 'products'])->get();
        return view('leveranciers.index', compact('leveranciers'));
    }

    public function show(Leverancier $leverancier)
    {
        return view('leveranciers.show', compact('leverancier'));
    }

    public function edit($id)
    {
        $leverancier = Leverancier::findOrFail($id);
        return view('leveranciers.edit', compact('leverancier'));
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

    public function showProducts(Leverancier $leverancier)
    {
        $products = $leverancier->products;
    
        return view('leveranciers.products', compact('leverancier', 'products'));
    }

    public function editProduct($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }
    

    public function updateProduct(Request $request, $product, Leverancier $leverancier)
    {
        $product = Product::findOrFail($product);

        $validatedData = $request->validate([
            'houdbaarheidsdatum' => 'required|date',
        ]);

        $product->update($validatedData);

        return redirect()->route('leveranciers.products', ['leverancier' => $leverancier])
        ->with('success', 'De houdbaarheidsdatum is gewijzigd');
;

    }
    
}

