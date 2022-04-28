<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    use HasFactory;

    protected $fillable = [
        'type', 'sequence', 'product', 'operation', 'state', 'mca', 'sca', 'rt', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function clients()
    {
        return $this->hasMany(Client::class);
    }

    public function disbursement()
    {
        return $this->hasOne(Disbursement::class);
    }

    public function approved()
    {
        return $this->hasOne(Approved::class);
    }

    public function observed()
    {
        return $this->hasOne(Observed::class);
    }

    public function rejected()
    {
        return $this->hasOne(Rejected::class);
    }

    public function assign()
    {
        return $this->hasOne(Assign::class);
    }

    public function debtor(){
        $debtor = $this->clients()->where('type', 'Deudor')->first();
        return $debtor;

    }

    public function codebtor(){
        $codebtor = $this->clients()->where('type', 'Codeudor')->first();
        return $codebtor;
    }

    public function guarantor(){
        $guarantor = $this->clients()->where('type', 'Garante')->first();
        return $guarantor;
    }

    public function coguarantor(){
        $coguarantor = $this->clients()->where('type', 'Cogarante')->first();
        return $coguarantor;
    }
}
