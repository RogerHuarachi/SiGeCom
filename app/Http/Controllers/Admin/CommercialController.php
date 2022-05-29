<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Commercial;
use App\Models\Client;
use Illuminate\Http\Request;

class CommercialController extends Controller
{
    public function index()
    {
        $commercials = Commercial::orderBy('id')->paginate(10);
        return view('admin.commercials.index', compact('commercials'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $client = Client::find($request->client_id);
        if (!$client->commercial) {
            Commercial::create($request->all());
            return back()->with('confirmation','Registrado Correctamente');
        } else {
            return back();
        }

    }

    public function show(Commercial $commercial)
    {
        //
    }

    public function edit(Commercial $commercial)
    {
        //
    }

    public function update(Request $request, Commercial $commercial)
    {
        $commercial->update($request->all());
        return back()->with('confirmation','Actualizado Correctamente');
    }

    public function destroy(Commercial $commercial)
    {
        $commercial->delete();
        return back()->with('confirmation', 'Eliminado Correctamente');
    }
}
