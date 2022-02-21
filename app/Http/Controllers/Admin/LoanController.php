<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Loan;
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
        loan::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
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
