<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    public function User(){
        return $this->belongsTo(User::class);
    }

    public function Properties(){
        return $this->hasMany(Property::class);
    }

    public function owner(){
        return $this->belongsTo(Owner::class);
    }

    public function agent(){
        return $this->hasOne(Agent::class);
    }

    public function propertyZone(){
        return $this->hasOne(PropertyZone::class);
    }

    public function propertyFeatureExternal(){
        return $this->hasMany(PropertyFeatureExternal::class);
    }

    public function propertyFeatureInternal(){
        return $this->hasMany(PropertyFeatureInternal::class);
    }

    public function propertyImage(){
        return $this->hasMany(propertyImage::class);
    }

}
