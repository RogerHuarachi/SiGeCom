<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Oan;
use Illuminate\Http\Request;

class OanController extends Controller
{
    public function index()
    {
        $oans = Oan::paginate(10);
        return view('admin.oans.index', compact('oans'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Oan::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
    }

    public function show(Oan $oan)
    {
        //
    }

    public function edit(Oan $oan)
    {
        //
    }

    public function update(Request $request, Oan $oan)
    {
        $oan->update($request->all());
        return back()->with('confirmation','Actualizado Correctamente');
    }

    public function destroy(Oan $oan)
    {
        $oan->delete();
        return back()->with('confirmation', 'Eliminado Correctamente');
    }
}
