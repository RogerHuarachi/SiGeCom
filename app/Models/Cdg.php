<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cdg extends Model
{
    use HasFactory;

    protected $fillable = [
        'comentaryo', 'comentaryf', 'client_id',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
