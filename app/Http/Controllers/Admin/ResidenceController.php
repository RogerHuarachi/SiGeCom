<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Residence;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ResidenceController extends Controller
{
    public function index()
    {
        $residences = Residence::paginate(10);
        return view('admin.residences.index', compact('residences'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $residence = Residence::create($request->all());

        $client = Client::find($request->client_id);
        $nombre = $client->id.".".$client->lastName." ".$client->name;

        $path = Storage::disk('public')->put($nombre,  $request->file('file'));
        $residence->fill(['file' => asset($path)])->save();

        return back()->with('confirmation','Registrado Correctamente');
    }

    public function show(Residence $residence)
    {
        //
    }

    public function edit(Residence $residence)
    {
        //
    }

    public function update(Request $request, Residence $residence)
    {
        $residence->update($request->all());

        $client = Client::find($request->client_id);
        $nombre = $client->id.".".$client->lastName." ".$client->name;

        if ($request->file('file')) {
            $path = Storage::disk('public')->put($nombre,  $request->file('file'));
            $residence->fill(['file' => asset($path)])->save();
        }
        return back()->with('confirmation','Actualizado Correctamente');
    }

    public function destroy(Residence $residence)
    {
        $residence->delete();
        return back()->with('confirmation', 'Eliminado Correctamente');
    }
}
