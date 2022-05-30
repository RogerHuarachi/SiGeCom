<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Debt;
use Illuminate\Http\Request;

class DebtController extends Controller
{
    public function index()
    {
        $debts = Debt::paginate(10);
        return view('admin.debts.index', compact('debts'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $client = Client::find($request->client_id);
        $debt = $client->debts->where('type', $request->type);
        if ($document->count() == 0) {
            Debt::create($request->all());
            return back()->with('confirmation','Registrado Correctamente');
        } else {
            return back();
        }
    }

    public function show(Debt $debt)
    {
        //
    }

    public function edit(Debt $debt)
    {
        //
    }

    public function update(Request $request, Debt $debt)
    {
        $debt->update($request->all());
        return back()->with('confirmation','Actualizado Correctamente');
    }

    public function destroy(Debt $debt)
    {
        $debt->delete();
        return back()->with('confirmation', 'Eliminado Correctamente');
    }
}
