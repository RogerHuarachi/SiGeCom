<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::paginate(10);
        return view('admin.jobs.index', compact('jobs'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $client = Client::find($request->client_id);
        if (!$client->job) {
            $job = Job::create($request->all());
            $nombre = $client->id.".".$client->lastName." ".$client->name;
            $path = Storage::disk('public')->put($nombre,  $request->file('file'));
            $job->fill(['file' => asset($path)])->save();

            return back()->with('confirmation','Registrado Correctamente');
        } else {
            return back();
        }
    }

    public function show(Job $job)
    {
        //
    }

    public function edit(Job $job)
    {
        //
    }

    public function update(Request $request, Job $job)
    {
        $job->update($request->all());

        $client = Client::find($request->client_id);
        $nombre = $client->id.".".$client->lastName." ".$client->name;

        if ($request->file('file')) {
            $path = Storage::disk('public')->put($nombre,  $request->file('file'));
            $job->fill(['file' => asset($path)])->save();
        }
        return back()->with('confirmation','Actualizado Correctamente');
    }

    public function destroy(Job $job)
    {
        $job->delete();
        return back()->with('confirmation', 'Eliminado Correctamente');
    }
}
