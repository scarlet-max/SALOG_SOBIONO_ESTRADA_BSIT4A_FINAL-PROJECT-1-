<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all(); 
        return view('user.index', compact('products')); 
    }

    
    public function create()
    {
        $products = Product::all(); 
        return view('user.create', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
            'category' => 'required',
            'quantity' => 'required|integer',

        ]);
        
        Product::create($request->all());
        return redirect()->route('user.index')->with('success', 'Product created successfully');
    }


    
    public function edit($id)
{
    $product = Product::findOrFail($id);
    return view('user.edit', compact('product'));
}

public function update(Request $request, $id)
{
    $product = Product::findOrFail($id);

    $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|numeric',
        'description' => 'required|string',
        'category' => 'required|string|max:255',
        'quantity' => 'required|integer',
    ]);

    $product->update($request->all());

    return redirect()->route('user.index')->with('success', 'Product updated successfully!');
}

    public function destroy(Product $product)
{
    $product->delete();

    return redirect()->route('user.index')->with('success', 'Product deleted successfully.');
}


}
