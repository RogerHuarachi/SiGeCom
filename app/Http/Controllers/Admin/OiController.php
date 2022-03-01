<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Oi;
use Illuminate\Http\Request;

class OiController extends Controller
{
    public function index()
    {
        $ois = Oi::paginate(10);
        return view('admin.ois.index', compact('ois'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request["total"]=$request->ib-$request->dg;
        Oi::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
    }

    public function show(Oi $oi)
    {
        //
    }

    public function edit(Oi $oi)
    {
        //
    }

    public function update(Request $request, Oi $oi)
    {
        $request["total"]=$request->ib-$request->dg;
        $oi->update($request->all());
        return back()->with('confirmation','Actualizado Correctamente');
    }

    public function destroy(Oi $oi)
    {
        $oi->delete();
        return back()->with('confirmation', 'Eliminado Correctamente');
    }
}
