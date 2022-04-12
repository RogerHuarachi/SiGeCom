<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Crna;
use Illuminate\Http\Request;

class CrnaController extends Controller
{
    public function index()
    {
        $crnas = Crna::paginate(10);
        return view('admin.crnas.index', compact('crnas'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Crna::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
    }

    public function show(Crna $crna)
    {
        //
    }

    public function edit(Crna $crna)
    {
        //
    }

    public function update(Request $request, Crna $crna)
    {
        $crna->update($request->all());
        return back()->with('confirmation','Actualizado Correctamente');
    }

    public function destroy(Crna $crna)
    {
        $crna->delete();
        return back()->with('confirmation', 'Eliminado Correctamente');
    }
}
