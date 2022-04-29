<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Folder;
use App\Models\Client;
use App\Models\User;
use App\Models\Assign;
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
        $debtor = $folder->debtor();
        $codebtor = $folder->codebtor();
        return view('formularios.deudor.independiente.show', compact('folder', 'debtor', 'codebtor'));
    }

    public function asal(Folder $folder)
    {
        $debtor = $folder->debtor();
        $codebtor = $folder->codebtor();
        return view('formularios.deudor.asalariado.show', compact('folder', 'debtor', 'codebtor'));
    }

    public function indepG(Folder $folder)
    {
        $debtor = $folder->guarantor();
        $codebtor = $folder->coguarantor();
        return view('formularios.garante.independiente.show', compact('folder', 'debtor', 'codebtor'));
    }

    public function asalG(Folder $folder)
    {
        $debtor = $folder->guarantor();
        $codebtor = $folder->coguarantor();
        return view('formularios.garante.asalariado.show', compact('folder', 'debtor', 'codebtor'));
    }



    public function sol(Folder $folder)
    {
        return view('hojas.solicitud.show', compact('folder'));
    }
    

    public function assignCom()
    {        
        $com = User::role('Comercial')->get();
        $jn = User::role('Encargado Nacional')->get();
        $jas = User::role('Encargado Sucursal')->get();
        $ass = User::role('Asesor')->get();
        $users = $com->merge( $jn->merge($jas->merge($ass)));
        $folders = Folder::orderBy('id', 'DESC')->get();
        $user = User::role('Comercial')->first();
        $assigns = Assign::where('user_id', $user->id)->orderBy('id', 'DESC')->paginate(10);
        return view('user.assigns.index', compact('assigns', 'users', 'folders'));
    }

    public function assignEN()
    {        
        $com = User::role('Comercial')->get();
        $jn = User::role('Encargado Nacional')->get();
        $jas = User::role('Encargado Sucursal')->get();
        $ass = User::role('Asesor')->get();
        $users = $com->merge( $jn->merge($jas->merge($ass)));
        $folders = Folder::orderBy('id', 'DESC')->get();
        $user = User::role('Encargado Nacional')->first();
        $assigns = Assign::where('user_id', $user->id)->orderBy('id', 'DESC')->paginate(10);
        return view('user.assigns.index', compact('assigns', 'users', 'folders'));
    }

    public function assign()
    {
        $user = Auth::user();
        $assigns = Assign::where('user_id', $user->id)->orderBy('id', 'DESC')->paginate(10);
        return view('user.folders.assigns.index', compact('assigns'));
        // return $user;
    }
}
