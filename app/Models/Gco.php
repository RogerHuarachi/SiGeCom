<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gco extends Model
{
    use HasFactory;

    protected $fillable = [
        'item', 'money', 'client_id'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
