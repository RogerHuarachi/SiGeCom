<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gf;
use App\Models\Client;
use Illuminate\Http\Request;

class GfController extends Controller
{
    public function index()
    {
        $gfs = Gf::paginate(10);
        return view('admin.gfs.index', compact('gfs'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {        
        $client = Client::find($request->client_id);
        if ($client->gfs->count() == 0) {
            for ($i=0; $i < 14; $i++) { 
                Gf::create([
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

    public function show(Gf $gf)
    {
        //
    }

    public function edit(Gf $gf)
    {
        //
    }

    public function update(Request $request, Gf $gf)
    {
        $gf->update($request->all());
        return back()->with('confirmation','Actualizado Correctamente');
    }

    public function destroy(Gf $gf)
    {
        $gf->delete();
        return back()->with('confirmation', 'Eliminado Correctamente');
    }
}
