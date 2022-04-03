<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ddg;
use Illuminate\Http\Request;

class DdgController extends Controller
{
    public function index()
    {
        $ddgs = Ddg::paginate(10);
        return view('admin.ddgs.index', compact('ddgs'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Ddg::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
    }

    public function show(Ddg $ddg)
    {
        //
    }

    public function edit(Ddg $ddg)
    {
        //
    }

    public function update(Request $request, Ddg $ddg)
    {
        $ddg->update($request->all());
        return back()->with('confirmation','Actualizado Correctamente');
    }

    public function destroy(Ddg $ddg)
    {
        $ddg->delete();
        return back()->with('confirmation', 'Eliminado Correctamente');
    }
}
