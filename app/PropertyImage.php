<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyImage extends Model
{
    public function Property(){
        return $this->belongsTo(Property::class);
    }
}
