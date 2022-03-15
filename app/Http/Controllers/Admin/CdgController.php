<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cdg;
use Illuminate\Http\Request;

class CdgController extends Controller
{
    public function index()
    {
        $cdgs = Cdg::paginate(10);
        return view('admin.cdgs.index', compact('cdgs'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Cdg::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
    }

    public function show(Cdg $cdg)
    {
        //
    }

    public function edit(Cdg $cdg)
    {
        //
    }

    public function update(Request $request, Cdg $cdg)
    {
        $cdg->update($request->all());
        return back()->with('confirmation','Actualizado Correctamente');
    }

    public function destroy(Cdg $cdg)
    {
        $cdg->delete();
        return back()->with('confirmation', 'Eliminado Correctamente');
    }
}
