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
        'name', 'email', 'password',
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
}