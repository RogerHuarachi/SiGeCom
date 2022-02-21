<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    protected $fillable = [
        'type', 'warranty', 'value', 'client_id',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
