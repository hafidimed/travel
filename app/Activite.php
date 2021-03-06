<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activite extends Model
{
    public function activite_details()
    {
    	return $this->hasMany(Activite_detail::class);
    }

    public function reservations()
    {
    	return $this->hasMany(Reservation::class);
    }

    public function medias()
    {
    	return $this->hasMany(Media::class);
    }

    public function activity_day()
    {
        return $this->hasMany(Activity_day::class);
    }

    public function ville()
    {
    	return $this->belongsTo(Ville::class);
    }

    public function types()
    {
        return $this->belongsTo(Type::class);
    }
}
