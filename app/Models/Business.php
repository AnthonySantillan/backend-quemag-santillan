<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;
    protected $table = 'app.business';
    protected $fillable = [
        'name',
        'location',
        'phone',
        'deal',
        'email',
    ];
    protected $casts = [
        'is_approved' => 'boolean',
        'date' => 'datetime:Y-m-d',
    ];


    //protected $attributes = ['full_name'];
    /*function computer(){
        return $this->hasOne(Computer::class);
    }*/
    function computers(){
        return $this->hasMany(Computer::class);

    // de varios a varios
    //function computers(){
      //  return $this->belongsToMany(Computer::class)->withTimestamps();;
   }
}
