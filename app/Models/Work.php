<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    protected $fillable = [
        'type', 'amount', 'description', 'value',
        'exercise', 'state', 'client_id'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
    public function muebles(){
        $primary = $this->businesses()->where('level', 'PRIMARIA')->first();
        return $primary;

    }
}
