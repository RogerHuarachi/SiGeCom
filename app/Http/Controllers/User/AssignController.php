<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Assign;
use App\Models\Folder;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AssignController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Folder $folder)
    {
        // return $folder;
        $user = Auth::user();
        if ($folder->debtor()->loan->money <= $user->agency->autonomy) {
            if ($user->hasRole('Asesor')) {
                $users = User::role('Encargado Sucursal')->get();
                foreach ($users as $user) {
                    if( $user->agency->id == $folder->user->agency->id){
                        $assign = new Assign();
                        $assign->folder_id = $folder->id;
                        $assign->user_id = $user->id;
                        $assign->save();
                        break;
                    }
                }
                return back()->with('confirmation','Carpeta Registrado Correctamente');
            } else {
                $user = User::role('Comercial')->first();

                $assign = new Assign();
                $assign->folder_id = $folder->id;
                $assign->user_id = $user->id;
                $assign->save();

                return back()->with('confirmation','Carpeta Registrado Correctamente');
            }
        } else {
            $user = User::role('Comercial')->first();

            $assign = new Assign();
            $assign->folder_id = $folder->id;
            $assign->user_id = $user->id;
            $assign->save();

            return back()->with('confirmation','Carpeta Registrado Correctamente');
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
        //
    }

    public function destroy(Assign $assign)
    {
        //
    }
}
