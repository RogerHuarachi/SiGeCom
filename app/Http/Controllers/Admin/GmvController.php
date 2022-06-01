<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gmv;
use Illuminate\Http\Request;

class GmvController extends Controller
{
    public function index()
    {
        $gmvs = Gmv::paginate(10);
        return view('admin.gmvs.index', compact('gmvs'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $client = Client::find($request->client_id);
        if ($client->gmvs->count() == 0) {
            for ($i=0; $i < 13; $i++) { 
                Gmv::create([
                    'item' => $request->item[$i],
                    'amount' => $request->amount[$i],
                    'price' => $request->price[$i],
                    'total' => $request->amount[$i]*$request->price[$i],
                    'frequency' => $request->frequency[$i],
                    'totalmes' => Gmv::totalmes($request->frequency[$i], $request->amount[$i]*$request->price[$i]),
                    'client_id' => $request->client_id
                ]);
            }
            return back()->with('confirmation','Registrado Correctamente');
        } else {
            return back();
        }
    }

    public function show(Gmv $gmv)
    {
        //
    }

    public function edit(Gmv $gmv)
    {
        //
    }

    public function update(Request $request, Gmv $gmv)
    {
        $request["total"]=$request->amount*$request->price;

        if ($request->frequency == "DIARIO") {
            $request["totalmes"]=$request->total*26;
        }  elseif ($request->frequency == "SEMANAL") {
            $request["totalmes"]=$request->total*4;
        } elseif ($request->frequency == "QUINCENAL") {
            $request["totalmes"]=$request->total*2;
        } elseif ($request->frequency == "MENSUAL") {
            $request["totalmes"]=$request->total*1;
        } elseif ($request->frequency == "BIMESTRAL") {
            $request["totalmes"]=$request->total/2;
        } elseif ($request->frequency == "TRIMESTRAL") {
            $request["totalmes"]=$request->total/3;
        } elseif ($request->frequency == "SEMESTRAL") {
            $request["totalmes"]=$request->total/6;
        } elseif ($request->frequency == "ANUAL") {
            $request["totalmes"]=$request->total/12;
        } else {
            $request["totalmes"]=0;
        }
        $gmv->update($request->all());
        return back()->with('confirmation','Actualizado Correctamente');
    }

    public function destroy(Gmv $gmv)
    {
        $gmv->delete();
        return back()->with('confirmation', 'Eliminado Correctamente');
    }
}
