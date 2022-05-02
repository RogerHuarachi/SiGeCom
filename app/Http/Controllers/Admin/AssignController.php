<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Assign;
use App\Models\Folder;
use App\Models\User;
use Illuminate\Http\Request;

class AssignController extends Controller
{
    public function index()
    {

        $com = User::role('Comercial')->get();
        $jn = User::role('Encargado Nacional')->get();
        $jas = User::role('Encargado Sucursal')->get();
        $ass = User::role('Asesor')->get();
        $users = $com->merge( $jn->merge($jas->merge($ass)));
        $assigns = Assign::orderBy('id', 'DESC')->paginate(10);
        return view('admin.assigns.index', compact('assigns', 'users'));
        // return $folders;
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $folder = Folder::where('id','=', $request->folder_id)->firstOrFail();

        if (!$folder->assign) {
            Assign::create($request->all());
            return back()->with('confirmation','Registrado Correctamente');
        } else {
            return back()->with('confirmation','Asignacion  ya Asignada');
        }
    }

    public function show(Assign $assign)
    {
        //
    }

    public function edit(Assign $assign)
    {
        //
    }

    public function update(Request $request, Assign $assign)
    {
        $assign->update($request->all());
        return back()->with('confirmation','Actualizado Correctamente');
    }

    public function destroy(Assign $assign)
    {
        $assign->delete();
        return back()->with('confirmation', 'Eliminado Correctamente');
    }
}
