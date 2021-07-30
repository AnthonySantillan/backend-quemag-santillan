<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shoe extends Model
{
    use HasFactory;
    protected $table = 'app.shoes';
    //nombre de la clase en plural
    protected $fillable =[
        'names',
        'email',
        'description',
        'approved',
        'date',
    ];

    protected $casts = [
        'is_approved' => 'boolean',
        'date' => 'datetime:Y-m-d',
    ];


    protected $attributes = ['full_name'];


    //uno a uno

 /*   public function trademark(){
        return $this->belongsTo(Trademark::Class)
    }
*/

    //uno a varios

       public function trademarks(){
          return $this->belongsTo(Trademark::Class);
}


    //varios a varios
/*
    function trademarks(){
        return $this->belongsToMany(Trademark::class)->withTimestamps();
}
*/

//mutators

function setCodeAttribute($value){

    $this->attributes['code'] = strtoupper($value);
}


function setCodeAttributes($value){

    $this->attributes['date'] = 'hola';
}


//Accessors
 function getFullNameAttribute(){

    return $this->attributes['code'].$this->attributes['description'];
}


}
