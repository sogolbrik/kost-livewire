<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BedroomDetail extends Model
{
    protected $guarded = ['id'];

    public function bedroom(){
        return $this->belongsTo(Bedroom::class);
    }
}
