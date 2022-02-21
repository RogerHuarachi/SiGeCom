<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Passive;
use Illuminate\Http\Request;

class PassiveController extends Controller
{
    public function index()
    {
        $passives = Passive::paginate(10);
        return view('admin.passives.index', compact('passives'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Passive::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
    }

    public function show(Passive $passive)
    {
        //
    }

    public function edit(Passive $passive)
    {
        //
    }

    public function update(Request $request, Passive $passive)
    {
        $passive->update($request->all());
        return back()->with('confirmation','Actualizado Correctamente');
    }

    public function destroy(Passive $passive)
    {
        $passive->delete();
        return back()->with('confirmation', 'Eliminado Correctamente');
    }
}
