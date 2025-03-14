<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    public function __construct()
    {

    }

    // Display a listing of the products.
    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }

    // Store a newly created product in storage.
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'model' => 'required|string|max:255',
            'price' => 'required|integer',
            'color_id' => 'required|exists:colors,id',
        ]);

        $product = Product::create($validatedData);
        return response()->json($product, 201);
    }

    // Display the specified product.
    public function show()
    {
        $product = Product::all();
        return view('home', compact('product'));
    }

    // Update the specified product in storage.
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'model' => 'sometimes|required|string|max:255',
            'price' => 'sometimes|required|integer',
            'color_id' => 'sometimes|required|exists:colors,id',
        ]);

        $product = Product::findOrFail($id);
        $product->update($validatedData);
        return response()->json($product);
    }

    // Remove the specified product from storage.
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return response()->json(null, 204);
    }
}
