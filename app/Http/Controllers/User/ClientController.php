<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\User;
use App\Models\Caedec;
use App\Models\Work;
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
}
