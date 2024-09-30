<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    protected $guarded=[];
    
    //Relación uno a muchos
    public function tickets(){
        return $this->hasMany(Ticket::class);
    }
    //Relación muchos a muchos
    public function products(){
        return $this->belongsToMany(Product::class);
    }
    //muchos a muchos
    public function suppliers(){
        return $this->belongsToMany(Supplier::class);
    }

    public function users(){
        return $this->hasMany(User::class);
    }
}
