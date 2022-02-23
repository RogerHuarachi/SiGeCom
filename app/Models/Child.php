<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    use HasFactory;

    protected $fillable = [
        'age', 'gender', 'student', 'where',
        'type', 'other', 'client_id'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
