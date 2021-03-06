<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'type', 'description', 'doc', 'fojas', 'obs',
        'client_id',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
