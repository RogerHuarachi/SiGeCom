<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mub;
use App\Models\Client;
use Illuminate\Http\Request;

class MubController extends Controller
{
    public function index()
    {
        $mubs = Mub::paginate(10);
        return view('admin.mubs.index', compact('mubs'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $client = Client::find($request->client_id);
        $frec = $client->frec();

        if ($request->frequency == "DIARIO") {
            $request["buysMonth"]=$request->amount*$request->buy*$frec;
            $request["saleMonth"]=$request->amount*$request->sale*$frec;
        }  elseif ($request->frequency == "SEMANAL") {
            $request["buysMonth"]=$request->amount*$request->buy*4;
            $request["saleMonth"]=$request->amount*$request->sale*4;
        } elseif ($request->frequency == "QUINCENAL") {
            $request["buysMonth"]=$request->amount*$request->buy*2;
            $request["saleMonth"]=$request->amount*$request->sale*2;
        }elseif ($request->frequency == "MENSUAL") {
            $request["buysMonth"]=$request->amount*$request->buy;
            $request["saleMonth"]=$request->amount*$request->sale;
        } else {
            $request["buysMonth"]=0;
            $request["saleMonth"]=0;
        }

        Mub::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
    }

    public function show(Mub $mub)
    {
        //
    }

    public function edit(Mub $mub)
    {
        //
    }

    public function update(Request $request, Mub $mub)
    {
        $client = Client::find($request->client_id);
        $frec = $client->frec();

        if ($request->frequency == "DIARIO") {
            $request["buysMonth"]=$request->amount*$request->buy*$frec;
            $request["saleMonth"]=$request->amount*$request->sale*$frec;
        }  elseif ($request->frequency == "SEMANAL") {
            $request["buysMonth"]=$request->amount*$request->buy*4;
            $request["saleMonth"]=$request->amount*$request->sale*4;
        } elseif ($request->frequency == "QUINCENAL") {
            $request["buysMonth"]=$request->amount*$request->buy*2;
            $request["saleMonth"]=$request->amount*$request->sale*2;
        }elseif ($request->frequency == "MENSUAL") {
            $request["buysMonth"]=$request->amount*$request->buy*1;
            $request["saleMonth"]=$request->amount*$request->sale*1;
        } else {
            $request["buysMonth"]=0;
            $request["saleMonth"]=0;
        }

        $mub->update($request->all());
        return back()->with('confirmation','Actualizado Correctamente');
    }

    public function destroy(Mub $mub)
    {
        $mub->delete();
        return back()->with('confirmation', 'Eliminado Correctamente');
    }
}
