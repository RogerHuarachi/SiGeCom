<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Business;
use App\Models\Caedec;
use App\Models\Client;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function index()
    {
        $businesses = Business::paginate(10);
        $caedecs = Caedec::orderBy('id')->get();
        return view('admin.businesses.index', compact('businesses', 'caedecs'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $client = Client::find($request->client_id);
        if (!$client->primary()) {
            $request["level"]="PRIMARIA";
            Business::create($request->all());
            return back()->with('confirmation','Registrado Correctamente');
        } else {
            if (!$client->secondary()) {
                $request["level"]="SECUNDARIA";
                Business::create($request->all());
                return back()->with('confirmation','Registrado Correctamente');
            } else {
                return back();
            }

        }
    }

    public function show(Business $business)
    {
        //
    }

    public function edit(Business $business)
    {
        //
    }

    public function update(Request $request, Business $business)
    {
        $business->update($request->all());
        return back()->with('confirmation','Actualizado Correctamente');
    }

    public function destroy(Business $business)
    {
        $business->delete();
        return back()->with('confirmation', 'Eliminado Correctamente');
    }
}
