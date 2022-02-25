<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gmv extends Model
{
    use HasFactory;

    protected $fillable = [
        'item', 'amount', 'price', 'total',
        'frequency', 'totalmes', 'client_id'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
