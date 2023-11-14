<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    //If you use $fillable: You explicitly list the attributes that are allowed to be mass-assigned. This is a more restrictive approach where only the specified attributes can be set en masse using create or update.

    //If you use $guard: You specify which attributes should not be mass-assigned. 

    protected $guard = [];//this means that all the attributes can be mass assigned and there's no need to restrict and attribute from getting mass assigned
    //this is not necessary to mention

    public function states(){
        return $this->hasMany(State::class);
    }

    public function stateCity(){
        return $this->hasManyThrough(City::class,State::class);
    }
}
