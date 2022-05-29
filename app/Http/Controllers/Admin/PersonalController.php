<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Personal;
use App\Models\Client;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function index()
    {
        $personals = Personal::orderBy('id')->paginate(10);
        return view('admin.personals.index', compact('personals'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $client = Client::find($request->client_id);
        if (!$client->personal) {
            Personal::create($request->all());
            return back()->with('confirmation','Registrado Correctamente');
        } else {
            return back();
        }
    }

    public function show(Personal $personal)
    {
        //
    }

    public function edit(Personal $personal)
    {
        //
    }

    public function update(Request $request, Personal $personal)
    {
        $personal->update($request->all());
        return back()->with('confirmation','Actualizado Correctamente');
    }

    public function destroy(Personal $personal)
    {
        $personal->delete();
        return back()->with('confirmation', 'Eliminado Correctamente');
    }
}
