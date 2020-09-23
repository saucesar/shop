<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'ref' => "F".$faker->numberBetween(100, 999),
        'name' => $faker->name(),
        'resume' => $faker->jobTitle(),
        'description' => $faker->realText(512),
        'categories' => ['CAT1', 'CAT2'],
        'price_ht' => $faker->numberBetween(100, 999),
        'quantity' => $faker->numberBetween(0, 100),
        'active' => $faker->numberBetween(1, 10) > 5 ? true : false,
    ];
});
