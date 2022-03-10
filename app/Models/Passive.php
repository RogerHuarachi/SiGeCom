<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passive extends Model
{
    use HasFactory;

    protected $fillable = [
        'creditor', 'share', 'balace', 'state', 'value', 'client_id',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
