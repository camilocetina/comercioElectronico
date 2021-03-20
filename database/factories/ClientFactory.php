<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Admin\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    return [
        //
    	  'name'      => $faker->name,
    	  'lastname'  => $faker->lastname,
    	  'document'  => $faker->randomNumber,
    	  'birthday'   => $faker->dateTimeBetween('1990-01-01', '2012-12-31')
    ->format('d/m/Y'),
          'phone'    => $faker->randomNumber,

       
           
    ];
});
