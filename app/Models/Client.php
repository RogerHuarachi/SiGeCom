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

    public function ois()
    {
        return $this->hasMany(Oi::class);
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
        $type = $this->sales()->first()->type;
        $frec = 0;
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



        return $frec;
    }
}
