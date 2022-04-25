<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dge extends Model
{
    use HasFactory;

    protected $fillable = [
        'business', 'position', 'employer', 'date', 'payment',
        'year', 'month', 'son', 'other', 'description',
        'client_id'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
