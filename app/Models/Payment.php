<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'proeza', 'obs1', 'bic', 'obs2',
        'client_id'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
