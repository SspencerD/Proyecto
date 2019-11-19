<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{

    public function region(){

        return $this->belongsTo(Region::class); // una ciudad pertenece a una región ,Departamento , Estado
    }
    public function province()
    {
        return $this->hasMany(Province::class); // una ciudad tiene muchas comunas o districtos.
    }

    

    public function user()
    {
        return $this->hasMany(User::class); // un ciudad tiene muchos usuarios
    }
    
    public function getProvinceNameAttribute() // en caso de que no exista ninguna ciudad para la región seleccionada , poner otros...
    {
        if ($this->province) // si existe la provincia osea la comuna
        return $this->province->name; //devuelve su nombre.. en caso contrario , retorna otros..
 
        return 'Otra...';
    }
}
