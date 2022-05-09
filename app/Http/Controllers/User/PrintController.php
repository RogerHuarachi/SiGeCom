<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;

class PrintController extends Controller
{
    public function solprint(Client $client)
    {
        $personal = $client->personal;
        $commercial = $client->commercial;
        $primary = $client->primary();
        $secondary = $client->secondary();
        $loan = $client->loan;
        $codebtor = $client->folder->codebtor();
        return view('hojas.solicitud.print', compact('client', 'personal', 'commercial', 'primary', 'secondary', 'loan', 'codebtor'));
        // return $client;
    }


    public function resprint(Client $client)
    {
        $folder = $client->folder;
        $dudor = $folder->debtor();
        $codeudor = $folder->codebtor();
        $garante = $folder->guarantor();
        $crna = $client->crna;
        return view('hojas.resolucion.print', compact('client', 'codeudor', 'garante', 'crna'));
        // return $client;
    }

    public function croprint(Client $client)
    {
        $residence = $client->residence;
        $job = $client->job;
        return view('hojas.croqui.print', compact('client', 'residence', 'job'));
        // return $client;
    }

    public function dpprint(Client $client)
    {
        return view('hojas.dp.print', compact('client'));
    }

    public function avalbprint(Client $client)
    {
        return $client;
    }

    public function avalgprint(Client $client)
    {
        return $client;
    }

    public function rdprint(Client $client)
    {
        return $client;
    }
}
