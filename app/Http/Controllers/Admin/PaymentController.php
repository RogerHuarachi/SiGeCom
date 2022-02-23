<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::paginate(10);
        return view('admin.payments.index', compact('payments'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Payment::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
    }

    public function show(Payment $payment)
    {
        //
    }

    public function edit(Payment $payment)
    {
        //
    }

    public function update(Request $request, Payment $payment)
    {
        $payment->update($request->all());
        return back()->with('confirmation','Actualizado Correctamente');
    }

    public function destroy(Payment $payment)
    {
        $payment->delete();
        return back()->with('confirmation', 'Eliminado Correctamente');
    }
}
