<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\User;
use App\Models\Caedec;
use App\Models\Document;
use App\Models\Work;
use App\Models\Inventory;
use App\Models\Sale;
use App\Models\Ico;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ClientController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Client $client)
    {
        //
    }

    public function edit(Client $client)
    {
        //
    }

    public function update(Request $request, Client $client)
    {
        $client->update($request->all());
        return back();
    }

    public function destroy(Client $client)
    {
        //
    }



    public function deudor(Request $request)
    {
        $now = Carbon::now();
        $birt = new Carbon($request->birth);
        $request["age"]=$now->diffInYears($birt);
        $request["type"]="Deudor";
        Client::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
    }

    public function codeudor(Request $request)
    {
        $now = Carbon::now();
        $birt = new Carbon($request->birth);
        $request["age"]=$now->diffInYears($birt);
        $request["type"]="Codeudor";
        Client::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
    }
    public function garante(Request $request)
    {
        $now = Carbon::now();
        $birt = new Carbon($request->birth);
        $request["age"]=$now->diffInYears($birt);
        $request["type"]="Garante";
        Client::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
    }

    public function cogarante(Request $request)
    {
        $now = Carbon::now();
        $birt = new Carbon($request->birth);
        $request["age"]=$now->diffInYears($birt);
        $request["type"]="Cogarante";
        Client::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
    }

    public function solicitud(Client $client)
    {
        $caedecs = Caedec::get();
        $personal = $client->personal;
        $commercial = $client->commercial;
        $primary = $client->primary();
        $secondary = $client->secondary();
        $loan = $client->loan;
        return view('hojas.solicitud.show', compact('caedecs', 'client', 'personal', 'commercial', 'primary', 'secondary', 'loan'));
    }

    public function conyegue(Client $client)
    {
        $caedecs = Caedec::get();
        return view('hojas.referencia.show', compact('client', 'caedecs'));
    }

    public function croqui(Client $client)
    {
        $residence = $client->residence;
        $job = $client->job;
        return view('hojas.croqui.show', compact('client', 'residence', 'job'));
    }

    public function dp(Client $client)
    {
        return view('hojas.dp.show', compact('client'));
    }

    public function avaluo(Client $client)
    {
        return view('hojas.avaluo.show', compact('client'));
    }

    public function mueble(Request $request)
    {
        $request["type"]="Muebles y enseres, Equipos Electronicos, Instrumentos de trabajo, Heramientas y Otros";
        Work::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
    }

    public function maquinaria(Request $request)
    {
        $request["type"]="Maquinaria y equipos";
        Work::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
    }

    public function mercaderia(Request $request)
    {
        $request["type"]="Mercaderia";
        Work::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
    }

    public function hc(Client $client)
    {
        return view('hojas.hc.show', compact('client'));
    }

    public function inventario(Client $client)
    {
        return view('hojas.inventario.show', compact('client'));
    }

    public function primary(Request $request)
    {
        $client = Client::find($request->client_id);
        $request["activity"]="Primaria";
        $inventory = $client->inventories->where('activity', $request->activity)->where('name', $request->name);
        if ($inventory->count() == 0) {
            if ($request->sale) {
                $request["mb"]=($request->sale-$request->buys)/$request->sale;
            } else {
                $request["mb"]=0;
            }

            if ($request->type == "MP") {
                $request["vimp"]=$request->amount*$request->buys;
            }  else {
                $request["vimp"]=0;
            }

            if ($request->type == 'pp') {
                $request["vipp"]=$request->amount*$request->buys*$request->advance;
            } else {
                $request["vipp"]=0;
            }

            if ($request->type == 'PT') {
                $request["vipt"]=$request->amount*$request->buys;
            } else {
                $request["vipt"]=0;
            }

            Inventory::create($request->all());
            return back()->with('confirmation','Registrado Correctamente');
        } else {
            return back();
        }
    }

    public function secondary(Request $request)
    {
        $client = Client::find($request->client_id);
        $request["activity"]="Secundaria";
        $inventory = $client->inventories->where('activity', $request->activity)->where('name', $request->name);
        if ($inventory->count() == 0) {
            if ($request->sale) {
                $request["mb"]=($request->sale-$request->buys)/$request->sale;
            } else {
                $request["mb"]=0;
            }

            if ($request->type == "MP") {
                $request["vimp"]=$request->amount*$request->buys;
            }  else {
                $request["vimp"]=0;
            }

            if ($request->type == 'pp') {
                $request["vipp"]=$request->amount*$request->buys*$request->advance;
            } else {
                $request["vipp"]=0;
            }

            if ($request->type == 'PT') {
                $request["vipt"]=$request->amount*$request->buys;
            } else {
                $request["vipt"]=0;
            }

            Inventory::create($request->all());
            return back()->with('confirmation','Registrado Correctamente');
        } else {
            return back();
        }
    }

    public function documento(Client $client)
    {
        return view('hojas.documento.show', compact('client'));
    }

    public function inmueble(Request $request)
    {
        $request["type"]="Bien Inmueble";
        $client = Client::find($request->client_id);
        $document = $client->documents->where('type', $request->type)->where('description', $request->description);
        if ($document->count() == 0) {
            Document::create($request->all());
            return back()->with('confirmation','Registrado Correctamente');
        } else {
            return back();
        }
    }

    public function vehiculo(Request $request)
    {
        $request["type"]="Vehiculo";
        $client = Client::find($request->client_id);
        $document = $client->documents->where('type', $request->type)->where('description', $request->description);
        if ($document->count() == 0) {
            Document::create($request->all());
            return back()->with('confirmation','Registrado Correctamente');
        } else {
            return back();
        }
    }

    public function evaluacion(Client $client)
    {
        $payment = $client->payment;
        $cmub = $client->cmub;
        $cdg = $client->cdg;
        $cbal = $client->cbal;
        return view('hojas.evaluacion.show', compact('client', 'payment', 'cmub', 'cdg', 'cbal'));
    }

    public function evaluaciona(Client $client)
    {
        $dge = $client->dge;
        $cbal = $client->cbal;
        return view('hojas.evaluaciona.show', compact('client', 'dge', 'cbal'));
    }

    public function dia(Request $request)
    {
        $client = Client::find($request->client_id);
        $sales = $client->sales->where('type', "Diario");
        if ($sales->count() == 0) {
            $lunes = Sale::create([
                'type' => "Diario",
                'item' => "Lunes",
                'money' => $request->lunes,
                'client_id' => $request->client_id
            ]);
            $martes = Sale::create([
                'type' => "Diario",
                'item' => "Martes",
                'money' => $request->martes,
                'client_id' => $request->client_id
            ]);
            $miercoles = Sale::create([
                'type' => "Diario",
                'item' => "Miercoles",
                'money' => $request->miercoles,
                'client_id' => $request->client_id
            ]);
            $jueves = Sale::create([
                'type' => "Diario",
                'item' => "Jueves",
                'money' => $request->jueves,
                'client_id' => $request->client_id
            ]);
            $viernes = Sale::create([
                'type' => "Diario",
                'item' => "Viernes",
                'money' => $request->viernes,
                'client_id' => $request->client_id
            ]);
            $sabado = Sale::create([
                'type' => "Diario",
                'item' => "Sabado",
                'money' => $request->sabado,
                'client_id' => $request->client_id
            ]);
            $domingo = Sale::create([
                'type' => "Diario",
                'item' => "Domingo",
                'money' => $request->domingo,
                'client_id' => $request->client_id
            ]);
            return back()->with('confirmation','Registrado Correctamente');
        } else {
            return back();
        }
    }

    public function semana(Request $request)
    {        
        $client = Client::find($request->client_id);
        $sales = $client->sales->where('type', "Semanal");
        if ($sales->count() == 0) {
            $s1 = Sale::create([
                'type' => "Semanal",
                'item' => "Semana 1",
                'money' => $request->s1,
                'client_id' => $request->client_id
            ]);
            $s2 = Sale::create([
                'type' => "Semanal",
                'item' => "Semana 2",
                'money' => $request->s2,
                'client_id' => $request->client_id
            ]);
            $s3 = Sale::create([
                'type' => "Semanal",
                'item' => "Semana 3",
                'money' => $request->s3,
                'client_id' => $request->client_id
            ]);
            $s4 = Sale::create([
                'type' => "Semanal",
                'item' => "Semana 4",
                'money' => $request->s4,
                'client_id' => $request->client_id
            ]);
            return back()->with('confirmation','Registrado Correctamente');
        } else {
            return back();
        }
    }

    public function mes(Request $request)
    {
        $request["type"]="Mensual";
        Sale::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
    }

    public function resolucion(Client $client)
    {
        $folder = $client->folder;
        $dudor = $folder->debtor();
        $codeudor = $folder->codebtor();
        $garante = $folder->guarantor();
        $crna = $client->crna;
        return view('hojas.resolucion.show', compact('client', 'codeudor', 'garante', 'crna'));
    }

    public function ingcliente(Request $request)
    {
        $request["type"]="Cliente";
        $request["ld"]=$request->sb-$request->al-$request->od+$request->oi;
        Ico::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
    }

    public function ingconyuge(Request $request)
    {
        $request["type"]="Conyuge";
        $request["ld"]=$request->sb-$request->al-$request->od+$request->oi;
        Ico::create($request->all());
        return back()->with('confirmation','Registrado Correctamente');
    }
}
