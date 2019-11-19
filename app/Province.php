<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    public function city()
    {
        return $this->belongsTo(City::class); // una comuna , distrito pertenece a una ciudad.
    }

    public function user()
    {
        return $this->hasMany(User::class); // un Comuna tiene muchos usuarios
    }
    
}

