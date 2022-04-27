<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ico;
use Illuminate\Http\Request;

class IcoController extends Controller
{
    public function index()
    {
        $icos = Ico::paginate(10);
        return view('admin.icos.index', compact('icos'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request["ld"]=$request->sb-$request->al-$request->od+$request->oi;
        Ico::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
    }

    public function show(Ico $ico)
    {
        //
    }

    public function edit(Ico $ico)
    {
        //
    }

    public function update(Request $request, Ico $ico)
    {
        $request["ld"]=$request->sb-$request->al-$request->od+$request->oi;
        $ico->update($request->all());
        return back()->with('confirmation','Actualizado Correctamente');
    }

    public function destroy(Ico $ico)
    {
        $ico->delete();
        return back()->with('confirmation', 'Eliminado Correctamente');
    }
}
