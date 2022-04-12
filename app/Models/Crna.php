<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crna extends Model
{
    use HasFactory;

    protected $fillable = [
        'aclaration', 'client_id'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
