<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mub extends Model
{
    use HasFactory;

    protected $fillable = [
        'detail', 'amount', 'unity', 'frequency', 'buy',
        'sale', 'buysMonth', 'saleMonth', 'client_id'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
