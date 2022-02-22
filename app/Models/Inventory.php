<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable = [
        'activity', 'type', 'amount', 'unit',
        'name', 'buys', 'sale', 'mb',
        'advance', 'vimp', 'vipp', 'vipt',
        'client_id'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
