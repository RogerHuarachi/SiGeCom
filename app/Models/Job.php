<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'property', 'time', 'business', 'note',
        'direction', 'number', 'zone', 'mobile', 'province',
        'description', 'neglat', 'neglon', 'file', 'client_id'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
