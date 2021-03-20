<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Admin\Order;
use App\Admin\Client;
use App\Admin\Product;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        //
        
    		'client_id'  => Client::inRandomOrder()->value('id') ?: factory(Client::class),
    		'product_id' => Product::inRandomOrder()->value('id') ?: factory(Product::class),
            'value'      => $faker->randomNumber,
          	'cant'	     => $faker->numberBetween(1,49),
            'direction'  => $faker->address,
            'priority'   => $faker->randomElement(['baja', 'media', 'alta']),

    ];
});
