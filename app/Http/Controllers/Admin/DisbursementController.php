<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Disbursement;
use Illuminate\Http\Request;

class DisbursementController extends Controller
{
    public function index()
    {
        $disbursements = Disbursement::orderBy('id', 'DESC')->paginate(10);
        return view('admin.disbursements.index', compact('disbursements'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $folder = Folder::where('id','=', $id)->firstOrFail();

        if ($folder->approved) {
            if (!$folder->disbursement) {
                $user = Auth::user();

                $disbursement = new Disbursement();
                $disbursement->folder_id = $folder->id;
                $disbursement->user_id = $user->id;
                $disbursement->save();

                return back()->with('confirmation','Registrado Correctamente');
            }else {
                return back()->with('validation','Carpeta Desembolsada');
            }
        }else {
            return back()->with('validation','Carpeta no aprobado');
        }
    }

    public function show(Disbursement $disbursement)
    {
        //
    }

    public function edit(Disbursement $disbursement)
    {
        //
    }

    public function update(Request $request, Disbursement $disbursement)
    {
        //
    }

    public function destroy(Disbursement $disbursement)
    {
        $disbursement->delete();
        return back()->with('confirmation','Eliminado Correctamente');
    }
}
