<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Review;
use Faker\Generator as Faker;
use App\Model\Blog;

$factory->define(Review::class, function (Faker $faker) {
    return [
        //
        'blog_id'=> function(){
        return Blog::all()->random();
        },
        'customer'=>$faker->name,
        'review'=>$faker->paragraph,
        'star' =>$faker->numberBetween(0,5),

    ];
});
