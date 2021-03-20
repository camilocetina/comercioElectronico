<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Admin\Inventory;
use App\Admin\Product;
use Faker\Generator as Faker;

$factory->define(Inventory::class, function (Faker $faker) {
    return [

    	//
    	'product_id' =>Product::inRandomOrder()->value('id') ?: factory(Product::class),
        'amount'      => $faker->numberBetween(1,102),
    	 
        //
    ];
});
