<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caedec extends Model
{
    use HasFactory;

    protected $fillable = [
        'category', 'heading', 'code', 'description', 'note'
    ];

    public function business()
    {
        return $this->hasOne(Business::class);
    }
}
