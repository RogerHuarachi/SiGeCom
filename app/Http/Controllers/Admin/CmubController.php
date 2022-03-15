<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cmub;
use Illuminate\Http\Request;

class CmubController extends Controller
{
    public function index()
    {
        $cmubs = Cmub::paginate(10);
        return view('admin.cmubs.index', compact('cmubs'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Cmub::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
    }

    public function show(Cmub $cmub)
    {
        //
    }

    public function edit(Cmub $cmub)
    {
        //
    }

    public function update(Request $request, Cmub $cmub)
    {
        $cmub->update($request->all());
        return back()->with('confirmation','Actualizado Correctamente');
    }

    public function destroy(Cmub $cmub)
    {
        $cmub->delete();
        return back()->with('confirmation', 'Eliminado Correctamente');
    }
}
