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
        //
    }

    public function show(Folder $folder)
    {
        //
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
}
