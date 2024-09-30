<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function category(){
        return $this->belongTo(Category::class);
    }
    public function supplier(){
        return $this->belongTo(Supplier::class);
    }

    public function tickets(){
        return $this->belongsToMany(Ticket::class);
    }
    //muchos a muchos
    public function branches(){
        return $this->belongsToMany(Branch::class);
    }

    
}
