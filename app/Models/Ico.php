<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ico extends Model
{
    use HasFactory;

    protected $fillable = [
        'type', 'sb', 'al', 'od', 'oi',
        'ld', 'client_id'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
