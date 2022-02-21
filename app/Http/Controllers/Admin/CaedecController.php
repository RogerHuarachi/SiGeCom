<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Caedec;
use Illuminate\Http\Request;

class CaedecController extends Controller
{
    
    public function index()
    {
        $caedecs = Caedec::paginate(10);
        return view('admin.caedecs.index', compact('caedecs'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Caedec::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
    }

    public function show(Caedec $caedec)
    {
        //
    }

    public function edit(Caedec $caedec)
    {
        //
    }

    public function update(Request $request, Caedec $caedec)
    {
        $caedec->update($request->all());
        return back()->with('confirmation','Actualizado Correctamente');
    }

    public function destroy(Caedec $caedec)
    {
        $caedec->delete();
        return back()->with('confirmation', 'Eliminado Correctamente');
    }
}
