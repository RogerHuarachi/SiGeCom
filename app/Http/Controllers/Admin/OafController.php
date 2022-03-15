<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Oaf;
use Illuminate\Http\Request;

class OafController extends Controller
{
    public function index()
    {
        $oafs = Oaf::paginate(10);
        return view('admin.oafs.index', compact('oafs'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Oaf::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
    }

    public function show(Oaf $oaf)
    {
        //
    }

    public function edit(Oaf $oaf)
    {
        //
    }

    public function update(Request $request, Oaf $oaf)
    {
        $oaf->update($request->all());
        return back()->with('confirmation','Actualizado Correctamente');
    }

    public function destroy(Oaf $oaf)
    {
        $oaf->delete();
        return back()->with('confirmation', 'Eliminado Correctamente');
    }
}
