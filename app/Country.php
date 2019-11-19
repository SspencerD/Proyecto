<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function region()
    {
        return $this->hasMany(Region::class); // un pais tiene muchas regiones ,departamentos o estados...
    }

    public function get(){

        $countries = Country::get();
        $countriesArray[''] ="selecciona tu pais";
        foreach($countries as $country){

            $countriesArray[$country->id] = $country->name;
        }

        return $countriesArray;
    }

    public function user()
    {
        return $this->hasMany(User::class); // un pais tiene muchos usuarios
    }
}
