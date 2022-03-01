<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ppsif;
use Illuminate\Http\Request;

class PpsifController extends Controller
{
    public function index()
    {
        $ppsifs = Ppsif::paginate(10);
        return view('admin.ppsifs.index', compact('ppsifs'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request["total"]=$request->amount*$request->salary;
        Ppsif::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
    }

    public function show(Ppsif $ppsif)
    {
        //
    }

    public function edit(Ppsif $ppsif)
    {
        //
    }

    public function update(Request $request, Ppsif $ppsif)
    {
        $request["total"]=$request->amount*$request->salary;
        $ppsif->update($request->all());
        return back()->with('confirmation','Actualizado Correctamente');
    }

    public function destroy(Ppsif $ppsif)
    {
        $ppsif->delete();
        return back()->with('confirmation', 'Eliminado Correctamente');
    }
}
