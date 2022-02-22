<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::paginate(10);
        return view('admin.items.index', compact('items'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request["total"]=($request->amount/$request->performance)*$request->price;
        Item::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
    }

    public function show(Item $item)
    {
        //
    }

    public function edit(Item $item)
    {
        //
    }

    public function update(Request $request, Item $item)
    {
        $request["total"]=($request->amount/$request->performance)*$request->price;
        $item->update($request->all());
        return back()->with('confirmation','Actualizado Correctamente');
    }

    public function destroy(Item $item)
    {
        $item->delete();
        return back()->with('confirmation', 'Eliminado Correctamente');
    }
}
