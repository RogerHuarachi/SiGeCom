<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gf extends Model
{
    use HasFactory;

    protected $fillable = [
        'item', 'total', 'client_id',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
