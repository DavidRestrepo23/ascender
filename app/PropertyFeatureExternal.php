<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyFeatureExternal extends Model
{
    public function Property(){
        return $this->belongsTo(Property::class);
    }
}
