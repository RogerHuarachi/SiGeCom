<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Folder;
use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;

class FolderController extends Controller
{
    public function index()
    {
        $folders = Folder::paginate(10);
        $users = User::orderBy('name')->get();
        return view('admin.folders.index', compact('folders', 'users'));
    }
    
    public function create()
    {
        //
    }
    
    public function store(Request $request)
    {
        Folder::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
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
        $folder->update($request->all());
        return back()->with('confirmation','Actualizado Correctamente');
    }
    
    public function destroy(Folder $folder)
    {
        $folder->delete();
        return back()->with('confirmation', 'Eliminado Correctamente');
    }
}
