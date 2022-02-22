<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function index()
    {
        $documents = Docuement::paginate(10);
        return view('admin.documents.index', compact('documents'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Docuement::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
    }

    public function show(Document $document)
    {
        //
    }

    public function edit(Document $document)
    {
        //
    }

    public function update(Request $request, Document $document)
    {
        $document->update($request->all());
        return back()->with('confirmation','Actualizado Correctamente');
    }

    public function destroy(Document $document)
    {
        $document->delete();
        return back()->with('confirmation', 'Eliminado Correctamente');
    }
}
