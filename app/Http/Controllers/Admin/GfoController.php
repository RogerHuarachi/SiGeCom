<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gfo;
use App\Models\Client;
use Illuminate\Http\Request;

class GfoController extends Controller
{
    public function index()
    {
        $gfos = Gfo::paginate(10);
        return view('admin.gfos.index', compact('gfos'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $client = Client::find($request->client_id);
        if ($client->gfos->count() == 0) {
            for ($i=0; $i < 11; $i++) { 
                Gfo::create([
                    'item' => $request->item[$i],
                    'total' => $request->total[$i],
                    'client_id' => $request->client_id
                ]);
            }
            return back()->with('confirmation','Registrado Correctamente');
        } else {
            return back();
        }
    }

    public function show(Gfo $gfo)
    {
        //
    }

    public function edit(Gfo $gfo)
    {
        //
    }

    public function update(Request $request, Gfo $gfo)
    {
        $gfo->update($request->all());
        return back()->with('confirmation','Actualizado Correctamente');
    }

    public function destroy(Gfo $gfo)
    {
        $gfo->delete();
        return back()->with('confirmation', 'Eliminado Correctamente');
    }
}
