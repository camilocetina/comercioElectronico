<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Admin\Suplier;
use Faker\Generator as Faker;

$factory->define(Suplier::class, function (Faker $faker) {
    return [
        //
        'name'     => $faker->name,
        'lastname' => $faker->lastName,
        'document' => $faker->randomNumber,
        'phone'    => $faker->randomNumber,
        'direction'=> $faker->address,
       	   
            
          
            
    ];
});
