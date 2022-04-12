<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Justification;
use Illuminate\Http\Request;

class JustificationController extends Controller
{
    public function index()
    {
        $justifications = Justification::paginate(10);
        return view('admin.justifications.index', compact('justifications'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Justification::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
    }

    public function show(Justification $justification)
    {
        //
    }

    public function edit(Justification $justification)
    {
        //
    }

    public function update(Request $request, Justification $justification)
    {
        $justification->update($request->all());
        return back()->with('confirmation','Actualizado Correctamente');
    }

    public function destroy(Justification $justification)
    {
        $justification->delete();
        return back()->with('confirmation', 'Eliminado Correctamente');
    }
}
