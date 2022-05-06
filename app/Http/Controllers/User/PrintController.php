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
}
