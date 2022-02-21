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
        return $this->hasMany(Familiy::class);
    }

    public function primary(){
        $primary = $this->businesses()->where('level', 'PRIMARIA')->first();
        return $primary;

    }

    public function secondary(){
        $secondary = $this->businesses()->where('level', 'SECUNDARIA')->first();
        return $secondary;
    }
}
