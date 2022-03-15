<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Af;
use Illuminate\Http\Request;

class AfController extends Controller
{
    public function index()
    {
        $afs = Af::paginate(10);
        return view('admin.afs.index', compact('afs'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Af::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
    }

    public function show(Af $af)
    {
        //
    }

    public function edit(Af $af)
    {
        //
    }

    public function update(Request $request, Af $af)
    {
        $af->update($request->all());
        return back()->with('confirmation','Actualizado Correctamente');
    }

    public function destroy(Af $af)
    {
        $af->delete();
        return back()->with('confirmation', 'Eliminado Correctamente');
    }
}
