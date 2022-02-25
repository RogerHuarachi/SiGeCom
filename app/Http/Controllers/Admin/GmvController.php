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
        $request["total"]=$request->amount*$request->price;

        if ($request->frequency == "DIARIO") {
            $request["totalmes"]=$request->total*26;
        }  elseif ($request->frequency == "SEMANAL") {
            $request["totalmes"]=$request->total*4;
        } elseif ($request->frequency == "QUINCENAL") {
            $request["totalmes"]=$request->total*2;
        } elseif ($request->frequency == "MENSUAL") {
            $request["totalmes"]=$request->total*1;
        } elseif ($request->frequency == "BIMENSUAL") {
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

        Gmv::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
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
        } elseif ($request->frequency == "BIMENSUAL") {
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
