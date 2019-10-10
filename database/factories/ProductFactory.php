<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [

        'name' => substr($faker->sentence(3), 0, -1), //se ocupa substring para extraer el punto final a una sentencia, se le pone -1 para que reconozca que sea el ultimo caracter.
        'description' => $faker->sentence(10),
        'long_description' => $faker->text,
        'price' => $faker->randomFloat(2, 6, 120000),
        'price_buy' => $faker->randomFloat(2, 6, 120000),
        'price_major' => $faker->randomFloat(2, 6, 120000),

        'category_id' => $faker->numberBetween(1,5)

    ];
});
