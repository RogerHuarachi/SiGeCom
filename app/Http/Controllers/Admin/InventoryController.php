<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index()
    {
        $inventories = Inventory::paginate(10);
        return view('admin.inventories.index', compact('inventories'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request["mb"]=($request->sale-$request->buys)/$request->buys;

        if ($request->type == "MP") {
            $request["vimp"]=$request->amount*$request->buys;
        }  else {
            $request["vimp"]=0;
        }

        if ($request->type == 'pp') {
            $request["vipp"]=$request->amount*$request->buys*$request->advance;
        } else {
            $request["vipp"]=0;
        }

        if ($request->type == 'PT') {
            $request["vipt"]=$request->amount*$request->buys;
        } else {
            $request["vipt"]=0;
        }
        
        Inventory::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
    }

    public function show(Inventory $inventory)
    {
        //
    }

    public function edit(Inventory $inventory)
    {
        //
    }

    public function update(Request $request, Inventory $inventory)
    {
        $request["mb"]=($request->sale-$request->buys)/$request->buys;

        if ($request->type == 'MP') {
            $request["vimp"]=$request->amount*$request->buys;
        }  else {
            $request["vimp"]=0;
        }

        if ($request->type == 'pp') {
            $request["vipp"]=$request->amount*$request->buys*$request->advance;
        } else {
            $request["vipp"]=0;
        }

        if ($request->type == 'PT') {
            $request["vipt"]=$request->amount*$request->buys;
        } else {
            $request["vipt"]=0;
        }

        $inventory->update($request->all());
        return back()->with('confirmation','Actualizado Correctamente');
    }

    public function destroy(Inventory $inventory)
    {
        $inventory->delete();
        return back()->with('confirmation', 'Eliminado Correctamente');
    }
}
