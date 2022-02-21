<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;

    protected $fillable = [
        'activity', 'level', 'profession', 'responsable', 'experience', 'antiquity', 'property', 'caedec_id', 'client_id'
    ];

    public function caedec()
    {
        return $this->belongsTo(Caedec::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
