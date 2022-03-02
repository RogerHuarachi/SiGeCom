<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Folder;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class FolderController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $folders = Folder::where('user_id', $user->id)->paginate(10);
        return view('user.folders.index', compact('folders'));
        // return $folders;
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $user = Auth::user();
        $request["user_id"]=$user->id;
        Folder::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
    }

    public function show(Folder $folder)
    {
        return view('user.folders.show', compact('folder'));
    }

    public function edit(Folder $folder)
    {
        //
    }

    public function update(Request $request, Folder $folder)
    {
        //
    }

    public function destroy(Folder $folder)
    {
        //
    }



    public function deudor(Request $request)
    {
        $folder = new Folder();
        $folder->user_id = Auth::user()->id;;
        $folder->save();

        $now = Carbon::now();
        $birt = new Carbon($request->birth);
        $request["type"]="Deudor";
        $request["age"]=$now->diffInYears($birt);
        $request["folder_id"]=$folder->id;
        Client::create($request->all());
        return back()->with('confirmation', 'Registrado Correctamente');
    }


    

    public function indep(Folder $folder)
    {
        return view('formularios.deudor.independiente.show', compact('folder'));
    }

    public function asal(Folder $folder)
    {
        return "asal";
    }

    public function indepG(Folder $folder)
    {
        return "indepG";
    }

    public function asalG(Folder $folder)
    {
        return "asalG";
    }

    

    public function sol(Folder $folder)
    {
        return view('hojas.solicitud.show', compact('folder'));
    }
}
