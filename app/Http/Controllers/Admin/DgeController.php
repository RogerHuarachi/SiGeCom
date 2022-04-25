<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dge;
use Illuminate\Http\Request;

class DgeController extends Controller
{
    public function index()
    {
        $dges = Dge::paginate(10);
        return view('admin.dges.index', compact('dges'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Dge::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
    }

    public function show(Dge $dge)
    {
        //
    }

    public function edit(Dge $dge)
    {
        //
    }

    public function update(Request $request, Dge $dge)
    {
        $dge->update($request->all());
        return back()->with('confirmation','Actualizado Correctamente');
    }

    public function destroy(Dge $dge)
    {
        $dge->delete();
        return back()->with('confirmation', 'Eliminado Correctamente');
    }
}
