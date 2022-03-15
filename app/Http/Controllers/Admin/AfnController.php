<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Afn;
use Illuminate\Http\Request;

class AfnController extends Controller
{
    public function index()
    {
        $afns = Afn::paginate(10);
        return view('admin.afns.index', compact('afns'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Afn::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
    }

    public function show(Afn $afn)
    {
        //
    }

    public function edit(Afn $afn)
    {
        //
    }

    public function update(Request $request, Afn $afn)
    {
        $afn->update($request->all());
        return back()->with('confirmation','Actualizado Correctamente');
    }

    public function destroy(Afn $afn)
    {
        $afn->delete();
        return back()->with('confirmation', 'Eliminado Correctamente');
    }
}
