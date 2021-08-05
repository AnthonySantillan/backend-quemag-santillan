<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shoe extends Model
{
    //use HasFactory
    protected $table = 'app.shoes'

    protected $fillable = [
        'name',
        'date',
        'cord',
        'template',
        'description',
        'colour',
        'is_approved',
    ];

    protected $casts = [
        'is_approved' => 'boolean',
        'date' => 'datetime:Y-m-d',
    ];

//uno a uno
    /*
    public function trademark(){
        return $this->hasOne(Trademark::class);
    }
*/

//uno a varios
    public function trademarks(){
        return $this->hasMany(Trademark::class);
    }

//varios a varios
    /*function trademarks(){
        return $this->belongsToMany(Trademark::class)->withTimestamps();
    }
*/


/*
//Mutators

    function getNameAttribute($value){
        $this->attributes['name']=strtoupper($value);
    }

//Accessors
    function getNameAttribute(){
        return strtolower($this->attributes['name']);
    }

*/
}
