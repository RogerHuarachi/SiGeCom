<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'type', 'name', 'lastName', 'gender', 'identification',
        'number', 'extension', 'nit', 'birth', 'age',
        'nacionality', 'dependents', 'civil', 'employment', 'mobile',
        'landline', 'mainActivity', 'secondaryActivity', 'folder_id',
    ];

    public function folder()
    {
        return $this->belongsTo(Folder::class);
    }

    public function personal()
    {
        return $this->hasOne(Personal::class);
    }

    public function commercial()
    {
        return $this->hasOne(Commercial::class);
    }

    public function businesses()
    {
        return $this->hasMany(Business::class);
    }

    public function loan()
    {
        return $this->hasOne(Loan::class);
    }

    public function assets()
    {
        return $this->hasMany(Asset::class);
    }

    public function passives()
    {
        return $this->hasMany(Passive::class);
    }

    public function residence()
    {
        return $this->hasOne(Residence::class);
    }

    public function job()
    {
        return $this->hasOne(Job::class);
    }

    public function works()
    {
        return $this->hasMany(Work::class);
    }

    public function families()
    {
        return $this->hasMany(Family::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function inventories()
    {
        return $this->hasMany(Inventory::class);
    }

    public function documents()
    {
        return $this->hasMany(Document::class);
    }

    public function children()
    {
        return $this->hasMany(Child::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

    public function debts()
    {
        return $this->hasMany(Debt::class);
    }

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }

    public function mubs()
    {
        return $this->hasMany(Mub::class);
    }

    public function cmub()
    {
        return $this->hasOne(Cmub::class);
    }

    public function gmvs()
    {
        return $this->hasMany(Gmv::class);
    }

    public function ppsifs()
    {
        return $this->hasMany(Ppsif::class);
    }

    public function gfos()
    {
        return $this->hasMany(Gfo::class);
    }

    public function gfs()
    {
        return $this->hasMany(Gf::class);
    }

    public function cdg()
    {
        return $this->hasOne(Cdg::class);
    }

    public function ois()
    {
        return $this->hasMany(Oi::class);
    }

    public function acns()
    {
        return $this->hasMany(Acn::class);
    }

    public function afns()
    {
        return $this->hasMany(Afn::class);
    }

    public function oans()
    {
        return $this->hasMany(Oan::class);
    }

    public function afs()
    {
        return $this->hasMany(Af::class);
    }

    public function oafs()
    {
        return $this->hasMany(Oaf::class);
    }

    public function primary(){
        $primary = $this->businesses()->where('level', 'PRIMARIA')->first();
        return $primary;

    }

    public function secondary(){
        $secondary = $this->businesses()->where('level', 'SECUNDARIA')->first();
        return $secondary;
    }

    public function frec(){
        $sales = $this->sales()->count();
        $frec = 0;
        if ($sales != 0) {
            $type = $this->sales()->first()->type;
            if ($type == "Diario") {
                if ($sales == 3) {
                    $frec = 12;
                } elseif ($sales == 4) {
                    $frec = 16;
                } elseif ($sales == 5) {
                    $frec = 20;
                } elseif ($sales == 6) {
                    $frec = 24;
                } elseif ($sales == 7) {
                    $frec = 26;
                } else {
                    $frec = 0;
                }
            } elseif ($type == "Semanal") {
                $frec = 4;
            } elseif ($type == "Quinsenal") {
                $frec = 2;
            } elseif ($type == "Mensual") {
                $frec = 1;
            } else {
                $frec = 0;
            }
        }



        return $frec;
    }

    public function mueble(){
        $muebles = $this->works()->where('type', 'Muebles y enseres, Equipos Electronicos, Instrumentos de trabajo, Heramientas y Otros')->get();
        return $muebles;
    }

    public function maquinaria(){
        $maquinarias = $this->works()->where('type', 'Maquinaria y equipos')->get();
        return $maquinarias;
    }

    public function mercaderia(){
        $mercaderias = $this->works()->where('type', 'Mercaderia')->get();
        return $mercaderias;
    }

    public function actprimary(){
        $primary = $this->inventories()->where('activity', 'PRIMARIA')->get();
        return $primary;

    }

    public function actsecondary(){
        $secondary = $this->inventories()->where('activity', 'SECUNDARIA')->get();
        return $secondary;
    }

    public function inmueble(){
        $primary = $this->documents()->where('type', 'Bien Inmueble')->get();
        return $primary;

    }

    public function vehiculo(){
        $secondary = $this->documents()->where('type', 'Vehiculo')->get();
        return $secondary;
    }

    public function dia(){
        $secondary = $this->sales()->where('type', 'Diario')->first();
        return $secondary;
    }

    public function semana(){
        $secondary = $this->sales()->where('type', 'Semanal')->first();
        return $secondary;
    }

    public function mes(){
        $secondary = $this->sales()->where('type', 'Mensual')->first();
        return $secondary;
    }

    public function balance($item){
        $asset = $this->assets()->where('type', $item)->first();
        if ($asset) {
            return $asset->value;
        } else {
            return 0;
        }
    }
}
