<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bedroom extends Model
{
    protected $guarded = ['id'];
    
    public function bedroomDetail(){
        return $this->hasMany(BedroomDetail::class);
    }
}
