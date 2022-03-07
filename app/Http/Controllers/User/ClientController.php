<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\User;
use App\Models\Caedec;
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
        $users = User::get();
        $caedecs = Caedec::get();
        return view('user.clients.show', compact('client', 'users', 'caedecs'));
        // return $client;
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
}
