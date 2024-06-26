<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Importeer het Product model als dat nodig is

class ProductController extends Controller
{


    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index');
    }

    // Jouw controller methoden hier...
}
