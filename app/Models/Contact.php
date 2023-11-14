<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','phone_no','address']; //we need to define this $fillable so that we can use create method defined in seeder
    
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function contactinformation(){
        return $this->hasOne(Contactinformation::class);
    }
}
