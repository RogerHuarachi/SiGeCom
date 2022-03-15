<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Acn;
use Illuminate\Http\Request;

class AcnController extends Controller
{
    public function index()
    {
        $acns = Acn::paginate(10);
        return view('admin.acns.index', compact('acns'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Acn::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
    }

    public function show(Acn $acn)
    {
        //
    }

    public function edit(Acn $acn)
    {
        //
    }

    public function update(Request $request, Acn $acn)
    {
        $acn->update($request->all());
        return back()->with('confirmation','Actualizado Correctamente');
    }

    public function destroy(Acn $acn)
    {
        $acn->delete();
        return back()->with('confirmation', 'Eliminado Correctamente');
    }
}
