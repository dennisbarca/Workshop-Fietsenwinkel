<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\CartItem;
use App\Models\User;
use Illuminate\Routing\Controller;



class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    // Display a listing of the products.
    public function index()
    {
        $products = Product::all();
        return view('home', compact('products'));
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
}
