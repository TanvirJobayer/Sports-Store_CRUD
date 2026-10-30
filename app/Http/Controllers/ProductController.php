<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store()
    {
        $product = new Product();
        $product->name = request('name');
        $product->category = request('category');
        $product->brand = request('brand');
        $product->price = request('price');
        $product->stock = request('stock');
        $product->description = request('description');
        $product->save();

        return redirect()->route('products.show', $product->id);
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

    public function update($id)
    {
        $product = Product::findOrFail($id);
        $product->name = request('name');
        $product->category = request('category');
        $product->brand = request('brand');
        $product->price = request('price');
        $product->stock = request('stock');
        $product->description = request('description');
        $product->save();

        return redirect()->route('products.show', $product->id);
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        
        return redirect()->route('products.index');
    }

}
