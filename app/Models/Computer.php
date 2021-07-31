<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    use HasFactory;
    protected $table = 'app.computers';
    protected $fillable = [
        'brand',
        'color',
        'code',
        'weight',
        'model',

    ];
    //uno a uno
    /*function business(){
        return $this->belongsTo(Business::class);
    }
    // uno a varios
    function busines(){
        return $this->belongsTo(Business::class);
    }*/
    // de varios a varios
    function busines(){
        return $this->belongsToMany(Business::class)->withTimestamps();;
    }
}
