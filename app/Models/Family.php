<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount', 'description', 'value', 'state',
        'client_id'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
