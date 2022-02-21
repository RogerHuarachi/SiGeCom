<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\User;
use App\Models\Folder;
use App\Models\Caedec;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $folders = Folder::get();
        $clients = Client::orderBy('id')->paginate(10);
        return view('admin.clients.index', compact('clients', 'folders'));
    }

    public function create()
    {
        $users = User::get();
        return view('admin.clients.create', compact('users'));
    }

    public function store(Request $request)
    {
        $now = Carbon::now();
        $birt = new Carbon($request->birth);
        $request["age"]=$now->diffInYears($birt);
        Client::create($request->all());
        return redirect()->route('clients.index')->with('confirmation','Registrado Correctamente');
    }

    public function show(Client $client)
    {
        $users = User::get();
        $caedecs = Caedec::get();
        return view('admin.clients.show', compact('users', 'client', 'caedecs'));
    }

    public function edit(Client $client)
    {
        $users = User::get();
        return view('admin.clients.edit', compact('users', 'client'));
    }

    public function update(Request $request, Client $client)
    {
        $now = Carbon::now();
        $birt = new Carbon($request->birth);
        $request["age"]=$now->diffInYears($birt);
        $client->update($request->all());
        return redirect()->route('clients.index')->with('confirmation','Cliente Actualizado Correctamente');
    }

    public function destroy(Client $client)
    {
        $client->delete();
        return back()->with('confirmation', 'Eliminado Correctamente');
    }
}
