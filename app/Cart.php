<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public function details()
    {
        return $this->hasMany(CartDetail::class);
    }


    public function GetSubTotalAttribute()
    {
        $subtotal = 0;
        foreach ($this->details as $detail) {
            $subtotal += $detail->quantity * $detail->product->price;
        }

        return $subtotal;
    }
}
