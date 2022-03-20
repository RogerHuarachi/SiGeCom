<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cbal;
use Illuminate\Http\Request;

class CbalController extends Controller
{
    public function index()
    {
        $cbals = Cbal::paginate(10);
        return view('admin.cbals.index', compact('cbals'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Cbal::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
    }

    public function show(Cbal $cbal)
    {
        //
    }

    public function edit(Cbal $cbal)
    {
        //
    }

    public function update(Request $request, Cbal $cbal)
    {
        $cbal->update($request->all());
        return back()->with('confirmation','Actualizado Correctamente');
    }

    public function destroy(Cbal $cbal)
    {
        $cbal->delete();
        return back()->with('confirmation', 'Eliminado Correctamente');
    }
}
