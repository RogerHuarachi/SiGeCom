<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Document;
use App\Models\Client;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function index()
    {
        $documents = Document::paginate(10);
        return view('admin.documents.index', compact('documents'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $client = Client::find($request->client_id);
        $document = $client->documents->where('type', $request->type)->where('description', $request->description);
        if ($document->count() == 0) {
            Document::create($request->all());
            return back()->with('confirmation','Registrado Correctamente');
        } else {
            return back();
        }
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
