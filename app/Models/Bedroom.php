<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bedroom extends Model
{
    protected $guarded = ['id'];
    
    public function bedroomDetail(){
        return $this->hasMany(BedroomDetail::class);
    }

    public function transaction(){
        return $this->hasMany(Transaction::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
