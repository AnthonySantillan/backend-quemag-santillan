<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    //use HasFactory;
    protected $table = 'business';
    protected $attributes = [
        'name',
        'location',
        'phone',
        'deal',
        'email',
    ];
    /*function computer(){
        return $this->hasOne(Computer::class);
    }
    function computers(){
        return $this->hasMany(Computer::class);
    }*/
    // de varios a varios
    function computers(){
        return $this->belongsToMany(Computer::class)->withTimestamps();;
    }
}
