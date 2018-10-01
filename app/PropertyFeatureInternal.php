<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyFeatureInternal extends Model
{
    public function Property(){
        return $this->belongsTo(Property::class);
    }
}
