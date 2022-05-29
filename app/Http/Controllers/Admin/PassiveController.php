<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Passive;
use App\Models\Client;
use Illuminate\Http\Request;

class PassiveController extends Controller
{
    public function index()
    {
        $passives = Passive::paginate(10);
        return view('admin.passives.index', compact('passives'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $client = Client::find($request->client_id);
        $passive = $client->passives->where('creditor', $request->creditor);
        if ($passive->count() == 0) {
            if ($request->state == "MANTIENE") {
                $request["value"]=$request->share;
            }
            if ($request->state == "PARALELO") {
                $request["value"]=$request->share;
            }
            if ($request->state == "REFINANCIAMIENTO") {
                $request["value"]=0;
            }
            if ($request->state == "LIQUIDACION") {
                $request["value"]=0;
            }
            Passive::create($request->all());
            return back()->with('confirmation','Registrado Correctamente');
        } else {
            return back();
        }
    }

    public function show(Passive $passive)
    {
        //
    }

    public function edit(Passive $passive)
    {
        //
    }

    public function update(Request $request, Passive $passive)
    {
        if ($request->state == "MANTIENE") {
            $request["value"]=$request->share;
        }
        if ($request->state == "PARALELO") {
            $request["value"]=$request->share;
        }
        if ($request->state == "REFINANCIAMIENTO") {
            $request["value"]=0;
        }
        if ($request->state == "LIQUIDACION") {
            $request["value"]=0;
        }
        $passive->update($request->all());
        return back()->with('confirmation','Actualizado Correctamente');
    }

    public function destroy(Passive $passive)
    {
        $passive->delete();
        return back()->with('confirmation', 'Eliminado Correctamente');
    }
}
