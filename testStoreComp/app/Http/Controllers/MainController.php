<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(Request $request)
    {
        $sortBy = $request->get('sort_by', 'created_at'); 
        $sortOrder = $request->get('sort_order', 'desc'); 

        $products = Product::orderBy($sortBy, $sortOrder)->get();

        return view('home', ['products' => $products]);
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('show', ['product' => $product]);
    }
}
