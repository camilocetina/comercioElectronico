<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Admin\Recharge;
use App\Admin\Suplier;
use App\Admin\Product;
use Faker\Generator as Faker;

$factory->define(Recharge::class, function (Faker $faker) {
    return [
        //
    		'suplier_id' => Suplier::inRandomOrder()->value('id') ?: factory(Suplier::class),
    		'product_id' => Product::inRandomOrder()->value('id') ?: factory(Product::class),
     
            'amount'     => $faker->numberBetween(1,102),
            'state'      => $faker->numberBetween(0,1),
            'priority'   => $faker->randomElement(['baja', 'media', 'alta']),

        
    ];
});
