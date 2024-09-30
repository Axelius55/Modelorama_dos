<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $guarded=[];
    //Relación de uno a uno inversa
    public function ticket(){
        return $this->belongsTo(Ticket::class);
    }
}
