<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Asset;
use App\Models\Client;
use Illuminate\Http\Request;

class AssetController extends Controller
{
    public function index()
    {
        $assets = Asset::paginate(10);
        return view('admin.assets.index', compact('assets'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $client = Client::find($request->client_id);
        $asset = $client->assets->where('type', $request->type);
        if ($asset->count() == 0) {
            Asset::create($request->all());
            return back()->with('confirmation','Registrado Correctamente');
        } else {
            return back();
        }
    }

    public function show(Asset $asset)
    {
        //
    }

    public function edit(Asset $asset)
    {
        //
    }

    public function update(Request $request, Asset $asset)
    {
        $asset->update($request->all());
        return back()->with('confirmation','Actualizado Correctamente');
    }

    public function destroy(Asset $asset)
    {
        $asset->delete();
        return back()->with('confirmation', 'Eliminado Correctamente');
    }
}
