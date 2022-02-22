<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(10);
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Product::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
    }

    public function show(Product $product)
    {
        //
    }

    public function edit(Product $product)
    {
        //
    }

    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return back()->with('confirmation','Actualizado Correctamente');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return back()->with('confirmation', 'Eliminado Correctamente');
    }
}
