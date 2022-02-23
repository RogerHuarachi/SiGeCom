<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index()
    {
        $sales = Sale::paginate(10);
        return view('admin.sales.index', compact('sales'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Sale::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
    }

    public function show(Sale $sale)
    {
        //
    }

    public function edit(Sale $sale)
    {
        //
    }

    public function update(Request $request, Sale $sale)
    {
        $sale->update($request->all());
        return back()->with('confirmation','Actualizado Correctamente');
    }

    public function destroy(Sale $sale)
    {
        $sale->delete();
        return back()->with('confirmation', 'Eliminado Correctamente');
    }
}
