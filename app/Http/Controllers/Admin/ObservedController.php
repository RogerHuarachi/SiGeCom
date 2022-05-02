<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Folder;
use App\Models\Observed;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ObservedController extends Controller
{
    public function index()
    {
        $observeds = Observed::orderBy('id', 'DESC')->paginate(10);
        return view('admin.observeds.index', compact('observeds'));
    }

    public function create()
    {
        //
    }

    public function store($id)
    {
        $folder = Folder::where('id','=', $id)->firstOrFail();

        if ($folder->observed) {
            return back()->with('validation','Carpeta ya Observada');
        } elseif ($folder->approved) {
            return back()->with('validation','Carpeta ya Aprobada');
        } elseif ($folder->rejected) {
            return back()->with('validation','Carpeta ya Rechazada');
        }else {
            $user = Auth::user();
            $observed = new Observed();
            $observed->folder_id = $folder->id;
            $observed->user_id = $user->id;
            $observed->save();

            return back()->with('confirmation','Registrado Correctamente');
        }
    }

    public function show(Observed $observed)
    {
        //
    }

    public function edit(Observed $observed)
    {
        //
    }

    public function update(Request $request, Observed $observed)
    {
        //
    }

    public function destroy(Observed $observed)
    {
        $observed->delete();
        return back()->with('confirmation','Eliminado Correctamente');
    }
}
