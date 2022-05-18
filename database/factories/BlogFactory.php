<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Blog;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->word,
        'detail'=> $faker->paragraph,
        'price'=> $faker->numberBetween(10,1000),
        'stock'=>$faker->randomDigit,
        'discount'=>$faker->numberBetween(2,30)
    ];
});
