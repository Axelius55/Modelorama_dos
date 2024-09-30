<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $guarded=[];
    
    //Relación uno a muchos
    public function tickets(){
        return $this->hasMany(Ticket::class);
    }
}
