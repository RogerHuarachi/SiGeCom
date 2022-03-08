<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\User;
use App\Models\Caedec;
use App\Models\Document;
use App\Models\Work;
use App\Models\Inventory;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ClientController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Client $client)
    {
        //
    }

    public function edit(Client $client)
    {
        //
    }

    public function update(Request $request, Client $client)
    {
        //
    }

    public function destroy(Client $client)
    {
        //
    }



    public function deudor(Request $request)
    {
        $now = Carbon::now();
        $birt = new Carbon($request->birth);
        $request["age"]=$now->diffInYears($birt);
        $request["type"]="Deudor";
        Client::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
    }

    public function codeudor(Request $request)
    {
        $now = Carbon::now();
        $birt = new Carbon($request->birth);
        $request["age"]=$now->diffInYears($birt);
        $request["type"]="Codeudor";
        Client::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
    }

    public function solicitud(Client $client)
    {
        $caedecs = Caedec::get();
        return view('hojas.solicitud.show', compact('client', 'caedecs'));
    }

    public function croqui(Client $client)
    {
        return view('hojas.croqui.show', compact('client'));
    }

    public function dp(Client $client)
    {
        return view('hojas.dp.show', compact('client'));
    }

    public function avaluo(Client $client)
    {
        return view('hojas.avaluo.show', compact('client'));
    }

    public function mueble(Request $request)
    {
        $request["type"]="Muebles y enseres, Equipos Electronicos, Instrumentos de trabajo, Heramientas y Otros";
        Work::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
    }

    public function maquinaria(Request $request)
    {
        $request["type"]="Maquinaria y equipos";
        Work::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
    }

    public function mercaderia(Request $request)
    {
        $request["type"]="Mercaderia";
        Work::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
    }

    public function hc(Client $client)
    {
        return view('hojas.hc.show', compact('client'));
    }

    public function inventario(Client $client)
    {
        return view('hojas.inventario.show', compact('client'));
    }

    public function primary(Request $request)
    {
        $request["activity"]="Primaria";
        $request["mb"]=($request->sale-$request->buys)/$request->buys;

        if ($request->type == "MP") {
            $request["vimp"]=$request->amount*$request->buys;
        }  else {
            $request["vimp"]=0;
        }

        if ($request->type == 'pp') {
            $request["vipp"]=$request->amount*$request->buys*$request->advance;
        } else {
            $request["vipp"]=0;
        }

        if ($request->type == 'PT') {
            $request["vipt"]=$request->amount*$request->buys;
        } else {
            $request["vipt"]=0;
        }
        
        Inventory::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
    }

    public function secondary(Request $request)
    {
        $request["activity"]="Secundaria";
        $request["mb"]=($request->sale-$request->buys)/$request->buys;

        if ($request->type == "MP") {
            $request["vimp"]=$request->amount*$request->buys;
        }  else {
            $request["vimp"]=0;
        }

        if ($request->type == 'pp') {
            $request["vipp"]=$request->amount*$request->buys*$request->advance;
        } else {
            $request["vipp"]=0;
        }

        if ($request->type == 'PT') {
            $request["vipt"]=$request->amount*$request->buys;
        } else {
            $request["vipt"]=0;
        }
        
        Inventory::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
    }

    public function documento(Client $client)
    {
        return view('hojas.documento.show', compact('client'));
    }

    public function inmueble(Request $request)
    {
        $request["type"]="Bien Inmueble";
        Document::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
    }

    public function vehiculo(Request $request)
    {
        $request["type"]="Vehiculo";
        Document::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
    }
}
