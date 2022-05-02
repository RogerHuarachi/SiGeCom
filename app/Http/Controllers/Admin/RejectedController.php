<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Folder;
use App\Models\Rejected;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RejectedController extends Controller
{
    public function index()
    {
        $rejecteds = Rejected::orderBy('id', 'DESC')->paginate(10);
        return view('admin.rejecteds.index', compact('rejecteds'));
    }

    public function create()
    {
        //
    }

    public function store($id)
    {
        $folder = Folder::where('id','=', $id)->firstOrFail();

        if ($folder->approved) {
            return back()->with('validation','Carpeta ya Aprobada');
        } elseif ($folder->rejected) {
            return back()->with('validation','Carpeta ya Rechazada');
        } else {

            $folder->state = true;
            $folder->save();

            $user = Auth::user();

            $rejected = new Rejected();
            $rejected->folder_id = $folder->id;
            $rejected->user_id = $user->id;
            $rejected->save();

            return back()->with('confirmation','Registrado Correctamente');
        }
    }

    public function show(Rejected $rejected)
    {
        //
    }

    public function edit(Rejected $rejected)
    {
        //
    }

    public function update(Request $request, Rejected $rejected)
    {
        //
    }

    public function destroy(Rejected $rejected)
    {
        $folder = $approved->folder;
        $folder->state = false;
        $folder->save();

        $rejected->delete();
        return back()->with('confirmation','Eliminado Correctamente');
    }
}
