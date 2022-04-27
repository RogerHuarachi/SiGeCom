<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gco;
use Illuminate\Http\Request;

class GcoController extends Controller
{
    public function index()
    {
        $gcos = Gco::paginate(10);
        return view('admin.gcos.index', compact('gcos'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Gco::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
    }

    public function show(Gco $gco)
    {
        //
    }

    public function edit(Gco $gco)
    {
        //
    }

    public function update(Request $request, Gco $gco)
    {
        $gco->update($request->all());
        return back()->with('confirmation','Actualizado Correctamente');
    }

    public function destroy(Gco $gco)
    {
        $gco->delete();
        return back()->with('confirmation', 'Eliminado Correctamente');
    }
}
