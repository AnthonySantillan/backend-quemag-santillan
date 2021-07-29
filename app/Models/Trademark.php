<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trademark extends Model
{
    use HasFactory;
    protected $table = 'app.trademarks';
    //nombre de la clase en plural
    protected $fillable =[
        'names',
        'email',
        'phone',
        'identification',
    ];

    //uno a uno
/*
    function shoe(){
        return $this->hasOne(Shoe::class);
    }

*/

    //uno a varios

    function shoes(){
        return $this->hasMany(Shoe::class);
    }

    //varios a varios
/*
      function authors(){
        return $this->belongsToMany(Author::class)->withTimestamps();
}
*/

}
