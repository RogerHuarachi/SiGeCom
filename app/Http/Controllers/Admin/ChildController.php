<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Child;
use Illuminate\Http\Request;

class ChildController extends Controller
{
    public function index()
    {
        $children = Child::paginate(10);
        return view('admin.children.index', compact('children'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Child::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
    }

    public function show(Child $child)
    {
        //
    }

    public function edit(Child $child)
    {
        //
    }

    public function update(Request $request, Child $child)
    {
        $child->update($request->all());
        return back()->with('confirmation','Actualizado Correctamente');
    }

    public function destroy(Child $child)
    {
        $child->delete();
        return back()->with('confirmation', 'Eliminado Correctamente');
    }
}
