<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gf;
use Illuminate\Http\Request;

class GfController extends Controller
{
    public function index()
    {
        $gfs = Gf::paginate(10);
        return view('admin.gfs.index', compact('gfs'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Gf::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
    }

    public function show(Gf $gf)
    {
        //
    }

    public function edit(Gf $gf)
    {
        //
    }

    public function update(Request $request, Gf $gf)
    {
        $gf->update($request->all());
        return back()->with('confirmation','Actualizado Correctamente');
    }

    public function destroy(Gf $gf)
    {
        $gf->delete();
        return back()->with('confirmation', 'Eliminado Correctamente');
    }
}
