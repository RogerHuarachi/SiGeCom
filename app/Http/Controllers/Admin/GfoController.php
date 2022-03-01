<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gfo;
use Illuminate\Http\Request;

class GfoController extends Controller
{
    public function index()
    {
        $gfos = Gfo::paginate(10);
        return view('admin.gfos.index', compact('gfos'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Gfo::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
    }

    public function show(Gfo $gfo)
    {
        //
    }

    public function edit(Gfo $gfo)
    {
        //
    }

    public function update(Request $request, Gfo $gfo)
    {
        $gfo->update($request->all());
        return back()->with('confirmation','Actualizado Correctamente');
    }

    public function destroy(Gfo $gfo)
    {
        $gfo->delete();
        return back()->with('confirmation', 'Eliminado Correctamente');
    }
}
