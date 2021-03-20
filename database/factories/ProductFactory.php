<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Admin\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        //
        'name'  => $faker->name,
        'ref'   => $faker->numberBetween(19,49),
        'image' => $faker->randomElement(['img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg']),
    ];
});
