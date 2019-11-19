<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    public function city()
    {
        return $this->hasMany(City::class); // una region tiene muchas ciudades
    }

    public function country()
    {
        return $this->belongsTo(Country::class); //una región pertenece a un pais.
    }

    public function getCityNameAttribute() // en caso de que no exista ninguna ciudad para la región seleccionada , poner otros...
    {
        if ($this->city) // si existe la ciudad
        return $this->city->name; //devuelve su nombre.. en caso contrario , retorna otros..
 
        return 'Other...';
    }
    public function user()
    {
        return $this->hasMany(User::class); // una region tiene muchos usuarios
    }

    
}
