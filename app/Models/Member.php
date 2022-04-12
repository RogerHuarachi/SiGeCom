<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'type', 'name', 'ci', 'pt', 'mc', 'client_id'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
