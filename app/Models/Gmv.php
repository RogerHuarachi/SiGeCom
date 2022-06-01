<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gmv extends Model
{
    use HasFactory;

    protected $fillable = [
        'item', 'amount', 'price', 'total',
        'frequency', 'totalmes', 'client_id'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    

    public function totalmes($frequency, $total){
        if ($frequency == "DIARIO") {
            return $total*26;
        }  elseif ($frequency == "SEMANAL") {
            return $total*4;
        } elseif ($frequency == "QUINCENAL") {
            return $total*2;
        } elseif ($frequency == "MENSUAL") {
            return $total*1;
        } elseif ($frequency == "BIMESTRAL") {
            return $total/2;
        } elseif ($frequency == "TRIMESTRAL") {
            return $total/3;
        } elseif ($frequency == "SEMESTRAL") {
            return $total/6;
        } elseif ($frequency == "ANUAL") {
            return $total/12;
        } else {
            return 0;
        }
    }
}
