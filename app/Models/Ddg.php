<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ddg extends Model
{
    use HasFactory;

    protected $fillable = [
        'garanty', 'vc', 'mc', 'client_id'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
