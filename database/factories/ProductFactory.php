<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => 'test description...',
        'picture' => 'pictures/BDnthztTINfX364Mf1Kq192HY4ommhBUPSLkuSOU.jpeg',
        'price' => 222,
    ];
});
