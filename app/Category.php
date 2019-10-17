<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model

{

   public static $message = [

        'name.required' => 'Es necesario agregar un nombre al la  categoria',
        'name.min' => 'El nombre de la categoria debe contener al menos 3 caracteres...',
        'description.min' => 'hey, el maximo de caracteres son 200...'
    ];
    public static $rules = [

        'name' => 'required |min: 3 ',
        'description' => 'max:200 '
    ];



    protected $fillable = ['name', 'description'];
    // $category->products
    
    public function products()
    {
        return $this->hasMany(Product::class);
        
    }

    public function getFeaturedImageUrlAttribute()
    {
      $featuredProduct = $this->products()->first();
      return $featuredProduct->featured_image_url;
    }
}
