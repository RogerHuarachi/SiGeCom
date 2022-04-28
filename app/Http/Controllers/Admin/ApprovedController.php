<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Approved;
use Illuminate\Http\Request;

class ApprovedController extends Controller
{
    public function index()
    {
        $approveds = Approved::orderBy('id', 'DESC')->paginate(10);
        return view('admin.approveds.index', compact('approveds'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $folder = Folder::where('id','=', $id)->firstOrFail();

        if ($folder->observed) {
            $user = Auth::user();

            $approved = new Approved();
            $approved->folder_id = $folder->id;
            $approved->user_id = $user->id;
            $approved->save();

            return back()->with('confirmation','Registrado Correctamente');
        } elseif ($folder->approved) {
            return back()->with('validation','Carpeta ya Aprobada');
        } elseif ($folder->rejected) {
            return back()->with('validation','Carpeta ya Rechazada');
        } else {
            $user = Auth::user();

            $approved = new Approved();
            $approved->folder_id = $folder->id;
            $approved->user_id = $user->id;
            $approved->save();

            return back()->with('confirmation','Registrado Correctamente');
        }
    }

    public function show(Approved $approved)
    {
        //
    }

    public function edit(Approved $approved)
    {
        //
    }

    public function update(Request $request, Approved $approved)
    {
        //
    }

    public function destroy(Approved $approved)
    {
        $approved->delete();
        return back()->with('confirmation','Eliminado Correctamente');
    }
}
