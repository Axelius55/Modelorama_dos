<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $guarded=[];

    //relación uno a muchos
    public function products(){
        return $this->hasMany(Product::class);
    }
    //muchos a muchos
    public function branches(){
        return $this->belongsToMany(Branch::class);
    }
}
