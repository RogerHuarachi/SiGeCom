<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function index()
    {
        $works = Work::paginate(10);
        return view('admin.works.index', compact('works'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Work::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
    }

    public function show(Work $work)
    {
        //
    }

    public function edit(Work $work)
    {
        //
    }

    public function update(Request $request, Work $work)
    {
        $work->update($request->all());
        return back()->with('confirmation','Actualizado Correctamente');
    }

    public function destroy(Work $work)
    {
        $work->delete();
        return back()->with('confirmation', 'Eliminado Correctamente');
    }
}
