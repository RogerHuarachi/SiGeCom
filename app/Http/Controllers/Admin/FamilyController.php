<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Family;
use Illuminate\Http\Request;

class FamilyController extends Controller
{
    public function index()
    {
        $families = Fmily::paginate(10);
        return view('admin.families.index', compact('families'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Fmily::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
    }

    public function show(Family $family)
    {
        //
    }

    public function edit(Family $family)
    {
        //
    }

    public function update(Request $request, Family $family)
    {
        $family->update($request->all());
        return back()->with('confirmation','Actualizado Correctamente');
    }

    public function destroy(Family $family)
    {
        $family->delete();
        return back()->with('confirmation', 'Eliminado Correctamente');
    }
}
