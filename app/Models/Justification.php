<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Justification extends Model
{
    use HasFactory;

    protected $fillable = [
        'type', 'justification', 'client_id'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
