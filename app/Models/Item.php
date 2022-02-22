<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'amount', 'unit', 'performance', 'price',
        'total', 'product_id'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
