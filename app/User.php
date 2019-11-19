<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','lastname','roles','dni','raesonsocial','activity',
        'phone','address','creditactive','saleman','country_id','region_id','city_id','province_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    //para capturar la id del carrito de compras por usuario
    public function getCartAttribute()
    {
        $cart = $this->carts()->where('status', 'Active')->first(); // traeme el carrito solamente si esta activo..

        if ($cart)
        return $cart;
        
        //else
        $cart = new Cart();
        $cart->status='Active';
        $cart->user_id = $this->id;
        $cart->save();

        return $cart;
     }
     public function country()
     {    
      return $this->belongsTo('App\Country')->withDefault(['name'=>'Chile']);
      
     }
     public function region()
     {
        return $this->belongsTo('App\Region')->withDefault(['name' =>'Metropolitana de Santiago']);
     }
     public function city()
     {
        return $this->belongsTo('App\City')->withDefault(['name' =>'Santiago']);
     }
     public function province()
     {
        return $this->belongsTo('App\Province')->withDefault(['name'=>'La Cisterna']);
     }

     public function getCountryNameAttribute()
   {
       if ($this->country)
       return $this->country->name;

       return 'Otro País';

   }
   public function getRegionNameAttribute()
   {
       if ($this->region)
       return $this->region->name;

       return 'Otra Región';

   }
   public function getCityNameAttribute()
   {
       if ($this->city)
       return $this->city->name;

       return 'Otra Ciudad';
   }
   public function getProvinceNameAttribute()
   {
       if ($this->province)
       return $this->province->name;

       return 'Otra Comuna';

   }
}
