<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oi extends Model
{
    use HasFactory;

    protected $fillable = [
        'item', 'ib', 'dg','total', 'description', 'client_id',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
