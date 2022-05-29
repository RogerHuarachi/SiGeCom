<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Loan;
use App\Models\Client;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function index()
    {
        $loans = Loan::paginate(10);
        return view('admin.loans.index', compact('loans'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $client = Client::find($request->client_id);
        if (!$client->loan) {
            loan::create($request->all());
            return back()->with('confirmation','Registrado Correctamente');
        } else {
            return back();
        }
    }


    public function show(Loan $loan)
    {
        //
    }

    public function edit(Loan $loan)
    {
        //
    }

    public function update(Request $request, Loan $loan)
    {
        $loan->update($request->all());
        return back()->with('confirmation','Actualizado Correctamente');
    }

    public function destroy(Loan $loan)
    {
        $loan->delete();
        return back()->with('confirmation', 'Eliminado Correctamente');
    }
}
