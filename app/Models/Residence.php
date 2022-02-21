<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Residence extends Model
{
    use HasFactory;

    protected $fillable = [
        'property', 'time', 'direction', 'number',
        'zone', 'mobile', 'province', 'description',
        'domlat', 'domlon','file', 'client_id'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
