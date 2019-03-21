<?php

use App\Item;
use Faker\Generator as Faker;

$factory->define(Item::class, function (Faker $faker) {
    $price = $faker->randomElement([10000, 20000, 30000, 50000, 80000]);
    $cost_price = $price - 5000;

    return [
        'name' => $faker->word,
        'category_id' => $faker->numberBetween(1, 5),
        'price' => $price,
        'cost_price' => $cost_price,
        'quantity' => $faker->numberBetween(5,20),
    ];
});
