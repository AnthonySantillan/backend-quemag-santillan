<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trademark extends Model
{
    //use HasFactory;
    protected $table = 'authentication.trademarks';
    //nombre de la clase en plural
    protected $fillable =[
        'name',
        'identification_code',
        'desing',
        'logo',
        'colors',
    ];

//uno a uno
    /*function shoe(){
        return $this->beLongsTo(Shoe::class);
    }
*/

//uno a varios
    function shoe(){
        return $this->beLongsTo(Shoe::class);
    }


//varios a varios
    /*function shoes(){
    return $this->beLongsToMany(Shoe::class)->withTimestamps();
}
*/