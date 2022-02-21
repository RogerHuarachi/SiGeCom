<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    protected $fillable = [
        'money', 'currency', 'rate', 'term', 'share',
        'frequency', 'feeType', 'expiration', 'choose', 'warrantyOne',
        'warrantyTwo', 'destination', 'detail', 'client_id',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
